<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Category;
use App\Models\CompanyProgram;
use App\Models\Redemption;
use App\Models\Rewards;
use App\Models\Sambaza;
use Carbon\Carbon;
class Dashboard extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $categories = Category::all();
        $companies = Company::all();
        $programs = CompanyProgram::all();
        $redemptions = Redemption::all();
        $rewards = Rewards::all();
        $sambazas = Sambaza::all();
        //dd($redemptions->toArray());

        $dateRange = $this->getDateRange($request->input('date_filter'));
        if ($request->has('date_filter')) {
            $filter = $request->input('date_filter');
        } else {
            $filter = 'month'; // Default to 'month' if no filter is provided
        }
        $createdCompanies = Company::whereBetween('created_at', [$dateRange['start'], $dateRange['end']])->get();
        info('created companies'.$createdCompanies);
        // Initialize an empty associative array to store counts
        $groupedCounts = [];
        
        if ($filter === 'month') {
            // Group companies by month
            $groupedCompanies = $createdCompanies->groupBy(function ($company) {
                return $company->created_at->format('M');
            });
            // Create an array with all months from January to December
            $allMonths = [
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ];

            // Populate $groupedCounts with the counts for each month
            foreach ($allMonths as $month) {
                $groupedCounts[$month] = $groupedCompanies->has($month) ? $groupedCompanies[$month]->count() : 0;
            }
      
        } elseif ($filter === 'week') {
            // Group companies by day of the week
            $groupedCompanies = $createdCompanies->groupBy(function ($company) {
                return $company->created_at->format('l'); // Group by day name (e.g., 'Monday', 'Tuesday')
            });
        
            // Initialize an array with all days of the week
            $allDaysOfWeek = [
                'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
            ];
        
            // Populate $groupedCounts with the counts for each day of the week
            foreach ($allDaysOfWeek as $dayOfWeek) {
                $groupedCounts[$dayOfWeek] = $groupedCompanies->has($dayOfWeek) ? $groupedCompanies[$dayOfWeek]->count() : 0;
            }
        } elseif ($filter === 'today') {
            // Group companies by time of day
            $groupedCompanies = $createdCompanies->groupBy(function ($company) {
                return $company->created_at->format('ha');
            });
        
            // Initialize an array with all time of day categories
            $allTimeOfDay = [
                '12am', '1am', '2am', '3am', '4am', '5am', '6am', '7am', '8am', '9am', '10am', '11am',
                '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm', '11pm',
            ];

            // Populate $groupedCounts with the counts for each time of day
            foreach ($allTimeOfDay as $timeOfDay) {
                $groupedCounts[$timeOfDay] = $groupedCompanies->has($timeOfDay) ? $groupedCompanies[$timeOfDay]->count() : 0;
            }
        } elseif ($filter === 'year') {
            // Group companies by year
            // Group companies by year
            $groupedCompanies = $createdCompanies->groupBy(function ($company) {
                return $company->created_at->format('Y');
            });

            // Get the current year and the previous years
            $currentYear = date('Y');
            $years = [];
            for ($i = $currentYear; $i >= ($currentYear - 4); $i--) {
                $years[] = (string) $i;
            }

            // Populate $groupedCounts with the counts for each year
            foreach ($years as $year) {
                $groupedCounts[$year] = $groupedCompanies->has($year) ? $groupedCompanies[$year]->count() : 0;
            }
        }
        

        




        return view('dashboard', compact('users', 'categories', 'companies', 'programs', 'redemptions', 'sambazas', 'groupedCounts', 'rewards'));
    }

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
}
