<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\CompanyUser;
use App\Models\Customer;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Redemption;
use App\Models\OptedInPrograms;
use App\Models\Sambaza;
use Carbon\Carbon;



class CompanyDashboard extends Controller
{
    public function index (Request $request){
        $user = Auth::user();
       // dd($user);
        $companyUser = CompanyUser::where('user_id', $user->id)->first();
        $customerIds = OptedInPrograms::where('company_id', $companyUser->company_id)
                        ->pluck('customer_id')
                        //->distinct()
                        ->toArray();

        // Use the customer IDs to get the customers
        $customers = Customer::whereIn('id', $customerIds)->get();
        $userIds = CompanyUser::where('company_id', $companyUser->company_id)
                    ->pluck('user_id')
                    ->toArray();

        // Use the user IDs to get the company Employees
        $employees = User::whereIn('id', $userIds)->get();
        //company transactions
        $transactions = Transaction::where('company_id', $companyUser->company_id)->get();
        //company redemptions
        $redemptions = Redemption::where('company_id', $companyUser->company_id)->get();
        //company sambazas
        $sambazas = Sambaza::where('company_id', $companyUser->company_id)->take(10)->get();


        $dateRange = $this->getDateRange($request->input('date_filter'));
      
        
        $rangeData = [];
        if ($request->has('date_filter')) {
            $filter = $request->input('date_filter');
        } else {
            $filter = 'month'; // Default to 'month' if no filter is provided
        }

        $companyOptedInData = OptedInPrograms::where('company_id', $companyUser->company_id)
            ->whereBetween('created_at', [$dateRange['start'], $dateRange['end']])
            ->select('program_id', DB::raw('count(*) as customer_count'))
            ->groupBy('program_id')
            ->get(); 

        $companyRedemptionData = Redemption::where('company_id', $companyUser->company_id)
            ->whereBetween('created_at', [$dateRange['start'], $dateRange['end']])
            ->select(DB::raw('count(*) as redemption_count'))
            ->get();

       // Initialize an array to store redemption data by range category
       $rangeRedemptionData = [];
             // Initialize the $rangeData array
             $rangeData = [];




            // Populate $groupedCounts with the counts for each month
        if ($filter === 'month') {
                // Group companies by month
                $groupedRedemptions = $companyRedemptionData->groupBy(function ($company) {
                    // Check if created_at is not null before calling format()
                    if ($company->created_at) {
                        return $company->created_at->format('M');
                    } else {
                        // Return a default value or handle the case where created_at is null
                        return 'Unknown'; // You can change this to any default value you prefer
                    }
                });
            
                // Create an array with all months from January to December
                $allMonths = [
                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ];

                $categories = [
                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ];
            
                // Initialize an array to store counts for each month, setting all counts to 0 initially
                $rangeRedemptionData = array_fill_keys($allMonths, 0);
            
                // Populate $rangeRedemptionData with the counts for each month based on grouped data
                foreach ($allMonths as $month) {
                    if ($groupedRedemptions->has($month)) {
                        $rangeRedemptionData[$month] = $groupedRedemptions[$month]->count();
                    }
                }
            
        
        } elseif ($filter === 'week') {
            // Group companies by day of the week
            $groupedRedemptions = $companyRedemptionData->groupBy(function ($company) {
                return $company->created_at->format('l'); // Group by day name (e.g., 'Monday', 'Tuesday')
            });
        
            // Initialize an array with all days of the week
            $allDaysOfWeek = [
                'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
            ];

            $categories = [
                'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
            ];
        
            // Populate $groupedCounts with the counts for each day of the week
            foreach ($allDaysOfWeek as $dayOfWeek) {
                $rangeRedemptionData[$dayOfWeek] = $groupedRedemptions->has($dayOfWeek) ? $groupedRedemptions[$dayOfWeek]->count() : 0;
            }
        } elseif ($filter === 'today') {
            // Group companies by time of day
            $groupedRedemptions = $companyRedemptionData->groupBy(function ($company) {
                return $company->created_at->format('ha');
            });
        
            // Initialize an array with all time of day categories
            $allTimeOfDay = [
                '12am', '1am', '2am', '3am', '4am', '5am', '6am', '7am', '8am', '9am', '10am', '11am',
                '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm', '11pm',
            ];

            $categories = [
                '12am', '1am', '2am', '3am', '4am', '5am', '6am', '7am', '8am', '9am', '10am', '11am',
                '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm', '11pm',
            ];

            // Populate $groupedCounts with the counts for each time of day
            foreach ($allTimeOfDay as $timeOfDay) {
                $rangeRedemptionData[$timeOfDay] = $groupedRedemptions->has($timeOfDay) ? $groupedRedemptions[$timeOfDay]->count() : 0;
            }
        } elseif ($filter === 'year') {
            // Group companies by year
            // Group companies by year
            $groupedRedemptions = $companyRedemptionData->groupBy(function ($company) {
                return $company->created_at->format('Y');
            });

            // Get the current year and the previous years
            $currentYear = date('Y');
            $years = [];
            for ($i = $currentYear; $i >= ($currentYear - 4); $i--) {
                $years[] = (string) $i;
            }

            $categories = $years;

            // Populate $groupedCounts with the counts for each year
            foreach ($years as $year) {
                $rangeRedemptionData[$year] = $groupedRedemptions->has($year) ? $groupedRedemptions[$year]->count() : 0;
            }
        }
        info('range redemption is ' . json_encode($rangeRedemptionData));
        info($categories);
       // dd($companyOptedInData);
        // Check if $companyOptedInData is empty
        if ($companyOptedInData->isEmpty()) {
        // If it's empty, initialize $rangeData with default values and an empty $companyOptedInData array
        
            // If it's empty, initialize $rangeData with default values and an empty $companyOptedInData array
            $programId = 0;

            // Initialize $rangeData with a default entry
            $rangeData[$programId] = [
                'program_id' => $programId,
                'program_name' => 'Default Program',
                'filter_data' => [],
            ];
        
            // Initialize filter_data with all months set to 0
            foreach ($categories as $category) {
                $rangeData[$programId]['filter_data'][$category] = 0;
            }
        
            // Set $companyOptedInData with predefined data
            $companyOptedInData = [
                [
                    'program_id' => 0,
                    'program' => [
                        'name' => 'Default Program',
                    ],
                    'customer_count' => 0,
                    'created_at' => now(),
                ],
            ];
            
        } 
        else {
        
            foreach ($companyOptedInData as $optedIn) {
            
                $programId = $optedIn->program_id;
                $programName = $optedIn->program->name;
                $customerCount = $optedIn->customer_count;
                $createdAt = Carbon::parse($optedIn->created_at);
            
                // Determine the range category based on the selected filter
                $rangeCategory = '';
            
                if (in_array($filter, ['month', 'week', 'today', 'year'])) {
                    $formattedDate = '';
            
                    if ($filter === 'month') {
                        $formattedDate = $createdAt->format('M');
                    } elseif ($filter === 'week') {
                        $formattedDate = $createdAt->format('l');
                    } elseif ($filter === 'today') {
                        $formattedDate = $createdAt->format('ha');
                    } elseif ($filter === 'year') {
                        $formattedDate = $createdAt->format('Y');
                    }
            
                    // Check if the formatted date exists in $categories
                    if (in_array($formattedDate, $categories)) {
                        $rangeCategory = $formattedDate;
                    }
                }
            
                // Initialize the program entry if it doesn't exist
                if (!isset($rangeData[$programId])) {
                    // Initialize filter_data with all months set to 0
                    $rangeData[$programId] = [
                        'program_id' => $programId,
                        'program_name' => $programName,
                        'filter_data' => array_fill_keys($categories, 0),
                    ];
                }
            
                // Update the customer count in filter_data for the corresponding month
                if (!empty($rangeCategory)) {
                    $rangeData[$programId]['filter_data'][$rangeCategory] += $customerCount;
                } else {
                    // Set $rangeCategory and $customerCount to 0 if they are empty
                    $rangeCategory = 0;
                    $customerCount = 0;
            
                    $rangeData[$programId]['filter_data'][$rangeCategory] += $customerCount;
                }
            }
        }
  


  

        // Process and categorize data based on the date range
 

// $rangeData now contains the categorized data with program details, filter category, and customer_count


info('range Data is ' . json_encode($rangeData));
  


    
    
 

        // Process and calculate the total redemption count, considering the same filter


   


        return view('companyDashboard', compact('customers', 'employees',  'transactions', 'redemptions', 'sambazas', 'rangeRedemptionData', 'rangeData' ));
    

    }

    // Helper function to get the date range based on the user's selection
    private function getDateRange($filter)
    {
        $now = now(); // Current datetime
        info('now'. $now);
    
        $timezone = config('app.timezone'); // Get the application's timezone from configuration
    
        if ($filter === 'week') {
            $start = $now->startOfWeek(); // Start of the current week in the application's timezone
            $end = $now->endOfWeek(); // End of the current week in the application's timezone
        } elseif ($filter === 'month') {
            $start = $now->startOfMonth(); // Start of the current month in the application's timezone
            $end = $now->endOfMonth(); // End of the current day in the application's timezone
        } elseif ($filter === 'today') {
            $start = $now->startOfDay(); // Start of today (first second) in the application's timezone
            $end = $now->endOfDay(); // End of today (last second) in the application's timezone
        } elseif ($filter === 'year') {
            $start = $now->subYears(10)->startOfYear(); // 10 years ago, start of year in the application's timezone
            $end = $now->endOfYear(); // End of the current year in the application's timezone
        } else {
            // Default to the current month if no valid filter is provided
            $start = now()->startOfMonth();         
            $end = $now->endOfMonth();
        }
    
        return ['start' => $start, 'end' => $end];
    }
    
    
    
    // public function getDashboardStatistics($date){

    // }




    // public function getGraphsData(){
    //     $user = Auth::user();

    // }
}
