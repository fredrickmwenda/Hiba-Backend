<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Support\Facades\Storage; // Import the Storage facade
use Illuminate\Support\Facades\Hash;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\CompanyProgram;
use App\Models\CompanyUser;
use App\Models\OptedInPrograms;
use App\Repositories\CustomerRepository;
use App\Validators\CustomerValidator;

/**
 * Class CustomersController.
 *
 * @package namespace App\Http\Controllers;
 */
class CustomersController extends Controller
{
    /**
     * @var CustomerRepository
     */
    protected $repository;

    /**
     * @var CustomerValidator
     */
    protected $validator;

    /**
     * CustomersController constructor.
     *
     * @param CustomerRepository $repository
     * @param CustomerValidator $validator
     */
    public function __construct(CustomerRepository $repository, CustomerValidator $validator)
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
       
        if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')){
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $company_program = CompanyProgram::where('company_id',$companyUser->company_id )->first();
            //get all customers who have optedin the companyProgram OptedInPrograms
            // Get distinct customer ids who have opted into the companyProgram
            $customerIds = OptedInPrograms::where('company_id', $companyUser->company_id)
                                ->where('program_id', $company_program->id)
                                ->distinct()
                                ->pluck('customer_id');

            // Get the customers using the ids
            $customers = Customer::whereIn('id', $customerIds)->with('virtual_cards')->get();

        }else{
       
           $customers = $this->repository->all();
        }

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $customers,
            ]);
        }

        return view('customers.index', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CustomerCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CustomerCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $customer = $this->repository->create($request->all());

            $response = [
                'message' => 'Customer created.',
                'data'    => $customer->toArray(),
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
        $customer = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $customer,
            ]);
        }

        return view('customers.show', compact('customer'));
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
        $customer = $this->repository->find($id);

        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CustomerUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CustomerUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $customer = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Customer updated.',
                'data'    => $customer->toArray(),
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
                'message' => 'Customer deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Customer deleted.');
    }

    public function getCustomerOptedInPrograms()
    {
        try {
            // Get the authenticated customer's ID using Auth::guard
            $user = auth('api')->user();
    
            $user = Customer::findOrFail($user->id);
    
            $optedInPrograms = $user->optedInPrograms()->with('program.company')->get();
    
            return response()->json($optedInPrograms);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }
    


    public function updateProfile(Request $request)
    {
        try {
            $data = $request->json()->all();
    
            // Define validation rules
            $rules = [
                'name' => 'string|max:255',
                'email' => 'string|email|max:255|unique:customers,email,' . auth('api')->user()->id,
                'phone' => 'string|max:255|unique:customers,phone,' . auth('api')->user()->id,
            ];
    
            // Validate the incoming data based on the rules
            $this->validate($request, $rules);
    
            // Update the customer's profile
            $customer = auth('api')->user();
    
            if (isset($data['name'])) {
                $customer->name = $data['name'];
            }
            if (isset($data['email'])) {
                $customer->email = $data['email'];
            }
            if (isset($data['phone'])) {
                $customer->phone = $data['phone'];
            }
            if (isset($data['bio'])) {
                $customer->bio = $data['bio'];
            }
            // Update other fields as needed
    
            // Save the changes
            $customer->save();
    
            // Return a JSON response indicating success
            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully.',
                'data' => $customer,
            ]);
        } catch (\Exception $e) {
            // Handle exceptions here
            return response()->json([
                'success' => false,
                'message' => 'Profile update failed: ' . $e->getMessage(),
            ]);
        }
    }

    public function changePassword(Request $request)
    {
        info($request->all());
        try {
            // Validate the incoming request data
            $this->validate($request, [
                'currentPassword' => 'required',
                'newPassword' => 'required|min:6',
            ]);
           // $me = Auth::guard('customers')->user();
            //info($me);
    
            //$user = Customer::find(auth('api')->user()->id);
            $user =  auth('api')->user();
    
            if (Hash::check($request->currentPassword, $user->password)) {
                // Change the user's password
                $user->password = Hash::make($request->newPassword);
                $user->save();
    
                // Return a success response
                return response()->json([
                    'success' => true,
                    'message' => 'Password changed successfully.',
                ]);
            } else {
                // Return an error response for incorrect old password
                return response()->json([
                    'success' => false,
                    'message' => 'Old password is incorrect.',
                ]);
            }
        } catch (\Exception $e) {
            // Handle exceptions here
            return response()->json([
                'success' => false,
                'message' => 'Password change failed: ' . $e->getMessage(),
            ]);
        }
    }

    public function changeAvatar(Request $request)
    {
        try {
            info($request->all());
            
            // Check if the request contains a file with the name 'avatar'
            if ($request->hasFile('avatar')) {
                // Get the authenticated customer
                $customer = auth('api')->user();
    
                // Delete the previous avatar if it exists
                if ($customer->avatar) {
                    // Delete the previous avatar file
                    Storage::disk('public')->delete($customer->avatar);
                }
    
                // Upload and store the new avatar
                $image = $request->file('avatar');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/profile');
                $image->move($destinationPath, $name);
    
                // Update the customer's avatar field in the database
                $customer->avatar = 'assets/images/profile/' . $name;
                $customer->save();
    
                // Return a success response
                return response()->json([
                    'success' => true,
                    'message' => 'Avatar changed to the server successfully.',
                    'data' => $customer,
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file with the name "avatar" was uploaded.',
                ]);
            }
        } catch (\Exception $e) {
            // Handle exceptions here
            return response()->json([
                'success' => false,
                'message' => 'Avatar change failed: ' . $e->getMessage(),
            ]);
        }
    }
    
}
