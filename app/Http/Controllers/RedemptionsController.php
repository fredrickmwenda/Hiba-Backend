<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests;
use Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RedemptionCreateRequest;
use App\Http\Requests\RedemptionUpdateRequest;
use App\Models\Company;
use App\Repositories\RedemptionRepository;
use App\Validators\RedemptionValidator;

use App\Models\CompanyProgram;
use App\Models\CompanyUser;
use App\Models\Customer;
use App\Models\OptedInPrograms;
// use App\Models\Rewards;
use App\Models\Redemption;
use App\Models\VirtualCard;

/**
 * Class RedemptionsController.
 *
 * @package namespace App\Http\Controllers;
 */
class RedemptionsController extends Controller
{
    /**
     * @var RedemptionRepository
     */
    protected $repository;

    /**
     * @var RedemptionValidator
     */
    protected $validator;

    /**
     * RedemptionsController constructor.
     *
     * @param RedemptionRepository $repository
     * @param RedemptionValidator $validator
     */
    public function __construct(RedemptionRepository $repository, RedemptionValidator $validator)
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

        $user = Auth::user();

        if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')) {
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $redemptions = $this->repository->with('customer')->where('company_id', $companyUser->company_id)->all();
        } else {
            $redemptions = $this->repository->with('customer')->all();
        }

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $redemptions,
            ]);
        }

        return view('redemptions.index', compact('redemptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RedemptionCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(RedemptionCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $redemption = $this->repository->create($request->all());

            $response = [
                'message' => 'Redemption created.',
                'data'    => $redemption->toArray(),
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
        $redemption = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $redemption,
            ]);
        }

        return view('redemptions.show', compact('redemption'));
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
        $redemption = $this->repository->find($id);

        return view('redemptions.edit', compact('redemption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RedemptionUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(RedemptionUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $redemption = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Redemption updated.',
                'data'    => $redemption->toArray(),
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
                'message' => 'Redemption deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Redemption deleted.');
    }

    public function redemption(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'programId' => 'required|exists:company_programs,id',
            
            'customerId' => 'required|exists:customers,id',
            'amount' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ];

            return response()->json($response, 400); // Bad Request
        }

        $programId = $request->input('programId');
        $userId =   $request->input('customerId');
        
        $amount = $request->input('amount'); // Get the 'amount' from the request
        $program =  CompanyProgram::find($programId);

        $user = Customer::find($userId);
        if ($user) {
            $customerPoints = OptedInPrograms::where('customer_id', $userId)
                ->where('program_id', $programId)
                ->first();
            if ($customerPoints) {
                //check if earned_points much the rewards points_required if not return 
                $earnedPoints = $customerPoints->earned_points;
                         
                // $requiredPoints = $reward_like->points_required;

                if ($earnedPoints >= $amount) {
                    $unique_id = (string) Str::uuid();
                    // Perform redemption logic here, e.g., deduct points and save the redemption           
                    // Example: Deduct points and save the redemption record
                    $customerPoints->earned_points -= $amount;
                    $customerPoints->save();

                    $virtualCard = VirtualCard::where('customer_id', $userId)->first();
                    info('virtual card ipo' . $virtualCard->points);
                    //update the virtual card points too
                    if ($virtualCard->points > 0) {
                        $virtualCard->points -= $amount;
                        $virtualCard->save();
                    } else {
                        $cumulativePoints = number_format($earnedPoints - $amount, 2);
                        $virtualCard->points = $cumulativePoints;
                        $virtualCard->save();
                    }


                    // save the redemption record and return it to the user
                    $redemption = Redemption::create([
                        'customer_id' => $userId,
                        'company_id' => $program->company_id,
                    
                        'redeemed_points' => $amount,
                        'unique_id' => $unique_id,
                        'expiry_time' => now()->addDay(),
                    ]);

                    $message = "Hi, {$user->name}, you have successfully redeemed {$amount} ";

                    $response = [
                        'success' => true,
                        'message' => $message,
                        'data' => [
                            'opted_in' => $redemption->toArray(),
                            'user_name' => $user->name, // Add the user's name here
                        ],
                    ];

                    return response()->json($response, 200); // OK
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Insufficient points for redemption.',
                        'data' => null,
                    ];

                    // Return the JSON response with status code 400 (Bad Request)
                    return response()->json($response, 400); // Bad Request
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => 'You are not opted in to this program please optin to continue.',
                    'data' => null,
                ];

                // Return the JSON response with status code 404 (Not Found)
                return response()->json($response, 404);
            }
        } else {
            $response = [
                'success' => false,
                'message' => 'User not found.',
                'data' => null,
            ];

            // Return the JSON response with status code 404 (Not Found)
            return response()->json($response, 404);
        }
    }
}
