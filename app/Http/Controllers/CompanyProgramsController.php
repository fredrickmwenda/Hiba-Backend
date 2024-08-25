<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CompanyProgramsCreateRequest;
use App\Http\Requests\CompanyProgramsUpdateRequest;
use App\Repositories\CompanyProgramsRepository;
use App\Validators\CompanyProgramsValidator;
use App\Models\Company;
use App\Models\CompanyUser;
use App\Models\Category;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * Class CompanyProgramsController.
 *
 * @package namespace App\Http\Controllers;
 */
class CompanyProgramsController extends Controller
{
    /**
     * @var CompanyProgramsRepository
     */
    protected $repository;

    /**
     * @var CompanyProgramsValidator
     */
    protected $validator;

    /**
     * CompanyProgramsController constructor.
     *
     * @param CompanyProgramsRepository $repository
     * @param CompanyProgramsValidator $validator
     */
    public function __construct(CompanyProgramsRepository $repository, CompanyProgramsValidator $validator)
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
        if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')) {
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $companyPrograms = $this->repository->with('category', 'company')->where('company_id', $companyUser->company_id)->get();
        } else {
            $companyPrograms = $this->repository->with('category', 'company')->all();
        }


        if (request()->wantsJson()) {

            return response()->json([
                'data' => $companyPrograms,
            ]);
        }

        return view('programs.index', compact('companyPrograms'));
    }


    public function create()
    {
        $companies = Company::all();
        $categories = Category::all();

        return view('programs.create', compact('companies', 'categories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyProgramsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CompanyProgramsCreateRequest $request)
    {
        try {
            $user = Auth::user();

            //check if the company already has a program
            if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')) {
                $companyUser = CompanyUser::where('user_id', $user->id)->first();
                $companyPrograms = $this->repository->with('category', 'company')->where('company_id', $companyUser->company_id)->get();

                if (!$companyPrograms->isEmpty()) {
                    return redirect()->route('program.index')->with('message', 'You already have a program. Currently, a company only works with one program. Multi-program support will be launched in our next version.');
                }
            }



            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $compani = $companyUser->company_id;
            // Check if "entry_points" is present in the request, otherwise set it to 0
            // $entryPoints = $request->has('entry_points') ? $request->input('entry_points') : 0;
            $entryPoints = $request->input('entry_points') === null ? 0 : $request->input('entry_points');
            $request->merge([
                'company_id' => $compani,
                'entry_points' => $entryPoints,
            ]);
            //dd($request->all());
            $modelInstance = $this->repository->getModel();
            // dd($modelInstance);
            $companyProgram = $modelInstance->newModelInstance($request->all());
            $companyProgram->save();
            //$companyProgram = $this->repository->create($request->all());

            // Generate QR code with URL
            $qrCodeUrl = url('/op/hp/' . $companyProgram->id);
            $qrCode = QrCode::format('png')->size(200)->generate($qrCodeUrl);

            // Update the company program with the generated QR code
            $companyProgram->qr_code = base64_encode($qrCode);
            $companyProgram->save();

            $response = [
                'message' => 'CompanyPrograms created.',
                'data'    => $companyProgram->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            return redirect()->route('program.index')->with('message', $response['message']);

            // return redirect()->back()->with('message', $response['message']);
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
        $companyProgram = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $companyProgram,
            ]);
        }

        return view('programs.show', compact('companyProgram'));
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
        $companyProgram = $this->repository->find($id);

        return view('programs.edit', compact('companyProgram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CompanyProgramsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CompanyProgramsUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $companyProgram = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CompanyPrograms updated.',
                'data'    => $companyProgram->toArray(),
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
                'message' => 'CompanyPrograms deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CompanyPrograms deleted.');
    }

    // when a user opts in to a program we add the count of no of users as well check if the program has entry _points if it has disburse those points to the user
}
