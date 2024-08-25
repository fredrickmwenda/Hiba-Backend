<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\OptedInProgramsCreateRequest;
use App\Http\Requests\OptedInProgramsUpdateRequest;
use App\Repositories\OptedInProgramsRepository;
use App\Validators\OptedInProgramsValidator;
use App\Models\OptedInPrograms;
use App\Models\CompanyProgram;
use App\Models\Company;
use App\Models\Customer;
use App\Models\VirtualCard;
use Auth;
use DB;

/**
 * Class OptedInProgramsController.
 *
 * @package namespace App\Http\Controllers;
 */
class OptedInProgramsController extends Controller
{
    /**
     * @var OptedInProgramsRepository
     */
    protected $repository;

    /**
     * @var OptedInProgramsValidator
     */
    protected $validator;

    /**
     * OptedInProgramsController constructor.
     *
     * @param OptedInProgramsRepository $repository
     * @param OptedInProgramsValidator $validator
     */
    public function __construct(OptedInProgramsRepository $repository, OptedInProgramsValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        // $optedInPrograms = $this->repository->all();

        $optedInPrograms = $this->repository
            ->select('program_id', DB::raw('count(*) as user_count'))
            ->groupBy('program_id')
            ->orderByDesc('user_count') // Order by the highest user count
            ->get();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $optedInPrograms,
            ]);
        }

        return view('optedInPrograms.index', compact('optedInPrograms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OptedInProgramsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(OptedInProgramsCreateRequest $request)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            // Start a database transaction
           DB::beginTransaction();

            $optedInProgram = $this->repository->create($request->all());

            // Get the program details
            $program = Program::find($request->input('program_id'));

            if ($program && $program->entry_points > 0) {
                // Update user program points
                UserProgramPoints::updateOrCreate(
                    ['user_id' => $request->input('user_id'), 'program_id' => $request->input('program_id')],
                    ['earned_points' => $program->entry_points]
                );
            }

            // Commit the transaction
            DB::commit();

            $response = [
                'message' => 'OptedInPrograms created.',
                'data'    => $optedInProgram->toArray(),
            ];

            if ($request->wantsJson()) {
                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $optedInProgram = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $optedInProgram,
            ]);
        }

        return view('optedInPrograms.show', compact('optedInProgram'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $optedInProgram = $this->repository->find($id);

        return view('optedInPrograms.edit', compact('optedInProgram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OptedInProgramsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(OptedInProgramsUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $optedInProgram = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'OptedInPrograms updated.',
                'data'    => $optedInProgram->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'OptedInPrograms deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'OptedInPrograms deleted.');
    } 

    // create a graph of the highest opted in programs
    public function highestOptedInProgram()
    {
        // Retrieve opt-in data and calculate the sum of users for each program
        $programUsers = OptedInPrograms::select('program_id', DB::raw('count(*) as user_count'))
            ->groupBy('program_id')
            ->orderByDesc('user_count')
            ->get();

        // Find the highest opted-in program
        $highestProgram = $programUsers->first();

        // Get program name using relationship or from the Program model
        $programName = $highestProgram->program->name; // Assuming a relationship exists

        // Prepare data for graph
        $programLabels = $programUsers->pluck('program_id')->toArray();
        $userCounts = $programUsers->pluck('user_count')->toArray();

        // Return data to the view or API response
        return response()->json([
            'highest_program' => $programName,
            'program_labels' => $programLabels,
            'user_counts' => $userCounts,
        ]);
    }

    //graph for a company opted in programs in according to the users
    public function companyOptedInData($companyId)
    {
        // Retrieve opt-in data for the specified company and calculate the opted-in programs and users
        $companyOptedInData = OptedInPrograms::where('company_id', $companyId)
            ->select('program_id', DB::raw('count(*) as customer_count'))
            ->groupBy('program_id')
            ->get();

        // Prepare data for the graph
        $graphData = [];
        foreach ($companyOptedInData as $optedIn) {
            $programName = $optedIn->program->name; // Assuming a relationship exists
            $userCount = $optedIn->user_count;
            $graphData[] = ['program_name' => $programName, 'user_count' => $userCount];
        }

        // Return data to the view or API response
        return response()->json([
            'company_id' => $companyId,
            'opted_in_data' => $graphData,
        ]);
    }

    public function lowestOptedInPrograms()
    {
        $user = Auth::user();

        // Determine if the user has a specific role
        if ($user->hasRole('program-admin') || $user->hasRole('employee')) {
            // Get the user's company ID
            $companyId = $user->company_id;

            // Retrieve opt-in data and calculate the user count for each program
            $programUsers = OptedInPrograms::join('programs', 'opted_in_programs.program_id', '=', 'programs.id')
                ->select('opted_in_programs.program_id', DB::raw('count(*) as user_count'))
                ->where('programs.company_id', $companyId)
                ->groupBy('opted_in_programs.program_id')
                ->orderBy('user_count')
                ->take(10) // Take the last 10 programs
                ->get();
        } else {
            // Retrieve opt-in data and calculate the user count for each program
            $programUsers = OptedInPrograms::select('program_id', DB::raw('count(*) as user_count'))
                ->groupBy('program_id')
                ->orderBy('user_count')
                ->take(10) // Take the last 10 programs
                ->get();
        }

        // Prepare data for the graph
        $graphData = [];
        foreach ($programUsers as $optedIn) {
            $programName = $optedIn->program->name; // Assuming a relationship exists
            $userCount = $optedIn->user_count;
            $graphData[] = ['program_name' => $programName, 'user_count' => $userCount];
        }

        // Return data to the view or API response
        return response()->json([
            'lowest_opted_in_data' => $graphData,
        ]);
    }



    public function programOptin(Request $request)
    {
       // dd($request->all());
       info($request->all());
        try {
            $this->validate($request, [
                'programId' => 'required|exists:company_programs,id',
                'userId' => 'required|exists:customers,id',
            ]);

            $programId = $request->input('programId');
            $userId =  $request->input('userId');
            $user = Customer::find($userId);
            if ($user) {
                $program = CompanyProgram::find($programId);
                $company = Company::find($program->company_id);
                $isCustomerOpted = OptedInPrograms::where('program_id', $programId)
                ->where('customer_id', $userId)
                ->first();
                if(!$isCustomerOpted){
                    info('customer is not opted in yet');
                    // Check if the customer is already associated with the company
                    $existingCustomer = DB::table('company_customers')
                    ->where('company_id', $program->company_id)
                    ->where('customer_id', $userId)
                    ->first();

                    if (!$existingCustomer) {
                        // The customer is not associated with the company, so create the association
                        DB::table('company_customers')->insert([
                            'company_id' => $program->company_id,
                            'customer_id' => $userId,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }

                    if ($program && $program->entry_points > 0) {
                        $entry_points = $program->entry_points;
                        info($entry_points);
                        // update customer card with the points
                        $customerCard = VirtualCard::where('customer_id', $userId)
                        ->first();

                        $customerCard->points += $entry_points;
                        $customerCard->save();
    
                        $optedIn = OptedInPrograms::create([
                            'program_id' => $programId,
                            'customer_id' => $userId,
                            'company_id' => $company->id,
                            'earned_points' => $entry_points,
                        ]);


    
                        // Create the response message with user's name, program name, and entry points
                        $message = "Hi, {$user->name}, you have been opted into program {$program->name}. You have received {$entry_points} entry points. Shop to get more points.";
                
    
                        // Create the response array
                        $response = [
                            'success' => true,
                            'message' => $message,
                            'data' => [
                                'opted_in' => $optedIn->toArray(),
                                'user_name' => $user->name, // Add the user's name here
                            ],
                        ];
    
                        // Return the JSON response with status code 201 (Created)
                        return response()->json($response, 201);
                    } else {
                        $entry_points = 0;
                        info($entry_points);
    
    
                        $optedIn = OptedInPrograms::create([
                            'program_id' => $programId,
                            'customer_id' => $userId,
                            'company_id' => $company->id,
                            'earned_points' => $entry_points,
                        ]);
    
                        // Retrieve the user's name
                        //$userName = $user->name;
                        $message = "Hi, {$user->name}, you have been opted into program {$program->name}. Shop to get points.";
                        // Create the response array
                        $response = [
                            'success' => true,
                            'message' => $message,
                            'data' => [
                                'opted_in' => $optedIn->toArray(),
                                'user_name' => $user->name, // Add the user's name here
                            ],
                        ];
    
                        // Return the JSON response with status code 201 (Created)
                        return response()->json($response, 201);
                    }


                }else{
                    info('customer is already opted in');
                    $response = [
                        'success' => false,
                        'message' => 'You are already Opted into the program.',
                        'data' => null,
                    ];
    
                    // Return the JSON response with status code 404 (Not Found)
                    return response()->json($response, 404);
                }


 


            } else {
                // Create a response for the case when the user is not found
                $response = [
                    'success' => false,
                    'message' => 'User not found.',
                    'data' => null,
                ];

                // Return the JSON response with status code 404 (Not Found)
                return response()->json($response, 404);
            }

  
            

            return response()->json($response, 201);
        } catch (ValidatorException $e) {
            return response()->json([
                'success' => false,
                'error' => true,
                'message' => $e->getMessageBag(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }

    //get the programs a user has Opted in and user points in this programs
    
    

}
