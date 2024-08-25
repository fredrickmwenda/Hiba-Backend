<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RewardsCreateRequest;
use App\Http\Requests\RewardsUpdateRequest;
use App\Repositories\RewardsRepository;
use App\Validators\RewardsValidator;
use App\Models\CompanyProgram;
use App\Models\CompanyUser;
use App\Models\Rewards;
/**
 * Class RewardsController.
 *
 * @package namespace App\Http\Controllers;
 */
class RewardsController extends Controller
{
    /**
     * @var RewardsRepository
     */
    protected $repository;

    /**
     * @var RewardsValidator
     */
    protected $validator;

    /**
     * RewardsController constructor.
     *
     * @param RewardsRepository $repository
     * @param RewardsValidator $validator
     */
    public function __construct(RewardsRepository $repository, RewardsValidator $validator)
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
        //dd(Auth::user()->hasRole);
       if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')){
           $companyUser = CompanyUser::where('user_id', $user->id)->first();
           $rewards = $this->repository->with('program')->where('company_id', $companyUser->company_id)->get();

       }else{
            $rewards = $this->repository->with('program')->get();
       }
        

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $rewards,
            ]);
        }

        return view('rewards.index', compact('rewards'));
    }

    public function create(){
        $company = CompanyUser::where('user_id', Auth::user()->id)->first();
        $programs = CompanyProgram::where('company_id', $company->company_id)->get();
        //dd($programs);
        return view('rewards.create',compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RewardsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(RewardsCreateRequest $request)
    {
        try {
            //dd( $request->all());

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            // $reward = $this->repository->create($request->all());
            $rewardData = $request->except('image');

            if($request->hasFile('image')){
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                //save image to public folder
                $destinationPath = public_path('/assets/images/rewards');
                $image->move($destinationPath, $name);
                $rewardData['image'] = $name;
            }
            $company = CompanyUser::where('user_id', Auth::user()->id)->first();
            $rewardData['company_id'] = $company->company_id;
            //dd()
            $reward = $this->repository->create($rewardData);

            $response = [
                'message' => 'Reward created.',
                'data'    => $reward->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('reward.index')->with('message', $response['message']);
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
        $reward = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $reward,
            ]);
        }

        return view('rewards.show', compact('reward'));
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
        $reward = $this->repository->find($id);

        return view('rewards.edit', compact('reward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RewardsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(RewardsUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $reward = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Rewards updated.',
                'data'    => $reward->toArray(),
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
                'message' => 'Rewards deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Rewards deleted.');
    }


    public function getProgramRewards(Request $request){
        info($request->all());
        $this->validate($request, [
            'program' => 'required|exists:company_programs,id',
        ]);

        $rewards = Rewards::where('program_id', $request->input('program'))->get();

        $response = [  
            'data'    => $rewards,
        ];
        return response()->json($response);
    }
}
