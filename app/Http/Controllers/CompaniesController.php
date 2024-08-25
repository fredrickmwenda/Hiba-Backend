<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CompanyCreateRequest;
use App\Http\Requests\CompanyUpdateRequest;
use App\Repositories\CompanyRepository;
use App\Validators\CompanyValidator;
use App\Models\Category;

/**
 * Class CompaniesController.
 *
 * @package namespace App\Http\Controllers;
 */

class CompaniesController extends Controller
{
    /**
     * @var CompanyRepository
     */
    protected $repository;

    /**
     * @var CompanyValidator
     */
    protected $validator;

    /**
     * CompaniesController constructor.
     *
     * @param CompanyRepository $repository
     * @param CompanyValidator $validator
     */
    public function __construct(CompanyRepository $repository, CompanyValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $companies = $this->repository->with('programs')->all();

        if ($request->wantsJson()) {
            $companies->transform(function ($company) {
                $company->logo = asset('assets/images/company/' . $company->image);
                return $company;
            });

            return response()->json([
                'data' => $companies,
            ]);
        }

       

        return view('companies.index', compact('companies'));
    }



    public function create(){
        $categories = Category::all();
        return view('companies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */

    public function store(CompanyCreateRequest $request)
    {
        //dd($request->all());
        try {
            // dd($request->all());

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $companyData = $request->except('logo');

            if($request->hasFile('logo')){
                $image = $request->file('logo');
                $name = time() . '.' . $image->getClientOriginalExtension();
                //$name = time().'.'.$image->getClientOriginalExtension();
                //save image to public folder
                $destinationPath = public_path('/assets/images/company');
                $image->move($destinationPath, $name);
                $companyData['logo'] =  $name;
            }
            $company = $this->repository->create($companyData);
        
            // $company = $this->repository->create($request->all());

            $response = [
                'message' => 'Company created.',
                'data'    => $company->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            return redirect()->route('company.index')->with('message', $response['message']);

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
        $company = $this->repository->with('programs')->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $company,
            ]);
        }

        return view('companies.show', compact('company'));
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
        $company = $this->repository->find($id);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CompanyUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CompanyUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $company = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Company updated.',
                'data'    => $company->toArray(),
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
                'message' => 'Company deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Company deleted.');
    }


    public function companyPrograms($id)
    {

        $company = $this->repository->with('programs')->find($id);
        $companyPrograms = $company->programs;

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $company->programs,
            ]);
        }

        return view('companies.programs', compact('companyPrograms'));

    }

    public function showCompany(Request $request)
{
    $id = $request->input('id'); // Extract the company ID from the request

    $company = $this->repository->with('programs')->find($id);
 
    return response()->json(['data' => $company,]);
    

    
}
}
