<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProgramPoints;
use App\Models\CompanyUser;
use App\Models\OptedInPrograms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Entities\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Helpers\PhoneHelper;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
            
            if(Auth::user()->hasRole('CompanyAdmin')){
                $companyUser = CompanyUser::where('user_id', Auth::user()->id)->first();
                //get all user_ids which share  the same $como->company_id and use them to get the users
                   // Check if a CompanyUser record was found
                if ($companyUser) {
                    // Get all user IDs that share the same company_id as the authenticated user
                    $userIds = CompanyUser::where('company_id', $companyUser->company_id)
                        ->pluck('user_id')
                        ->toArray();

                    // Use the user IDs to get the users
                    $users = User::whereIn('id', $userIds)->get();
                    $roles = Role::all();
                } else {
                    throw new \Exception('CompanyUser record not found for the authenticated user.');
                    // Handle the case where no CompanyUser record was found for the authenticated user
                    // You may want to return an error or handle this differently
                }
            }else{
                $users = User::all();
                $roles = Role::all();
            }
            
            if (request()->wantsJson()) {

        
                return response()->json([
                    'data' => $users,
                ]);
            }

            return view('users.index', compact('users', 'roles'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->hasRole('CompanyAdmin')){
            $adminRole = Role::where('name', 'companyAdmin')->first();
            $employeeRole = Role::where('name', 'employee')->first();
            $roles = [$adminRole, $employeeRole];
            $company_det = CompanyUser::where('user_id', $user->id)->first(); 
            $company = Company::where('id', $company_det->company_id)->first();
        }
        else{
            $roles = Role::all();
            $company = Company::all();
         }
        
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' =>  $request->phone != null ? 'unique:users|max:100' : '',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        if(!PhoneHelper::checkPhoneNumber($request->phone)){
            response()->json(['errors' => 'Phone number is not valid'], 400);
        }

        


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        // $user->role_id = $request->role_id;
       // $role = Role::find($request->role_id);
        // $user->roles = $role->name;
        $role = Role::find($request->role_id);
        //dd($role->name);
        $user->save();
        //get thre role of the user
        $role = Role::find($request->role_id);
        $user->assignRole($role->name);

        // $created_user = User::where('email', $request->email)->first();

        if($role->name == 'Employee' || $role->name == 'CompanyAdmin'){
            CompanyUser::create([
                'company_id' => $request->company,
                'user_id' => $user->id,
                'approved' => 'yes'
            ]);
        }
        return redirect()->route('user.index')->with('success', 'User updated successfully.');
        // return view('users.index')->with('message', 'user created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        dd('nope');
        //if the user is a program user show the programs th
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findorFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        dd('wewe');

        $user = User::findorFail($id);
        $user->delete();
       
       return  back()->with('message', 'User Deleted successfully');

    }
    public function delete($id)
    {
       // dd('wewe');

        $user = User::findorFail($id);
        $user->delete();
       
       return  back()->with('message', 'User Deleted successfully');

    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $user = User::find(Auth::id());
            info($user);
            $avatar = $request->file('avatar');
            $avatarName = Auth::id() . '.' . $avatar->getClientOriginalExtension();
            //$avatar->storeAs('avatars', $avatarName, 'public'); // Save the image in the 'public/avatars' directory
            $destinationPath = public_path('/assets/images/avatar');
            $avatar->move($destinationPath, $avatarName);
            info($avatarName);
            // Update the user's avatar URL in the database
            $user->avatar = $avatarName;
            $user->save();
            // $user->update(['avatar' => $avatarName]); // Auth::user()->update(['avatar' => $avatarName]);
   
            return response()->json(['success' => true, 'message' => 'Avatar uploaded successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to upload avatar.']);
    }

    //update profile
    public function updateProfile(Request $request){
        
    
    
        //dd($request->all());
        $this->validate($request, [
            'name' => 'equired|rstring|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->user()->id,
            'phone' => 'required|string|max:255|unique:users,phone,' . auth()->user()->id,
        ]);
    
        // Update the user's profile
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->bio = $request->input('bio');
        // Update other fields as needed
    
        // Save the changes
        $user->save();
    
        // Return a response
        // if ($request->wantsJson()) {
        //     return response()->json([
        //         'message' => 'Profile updated successfully.',
        //         'data' => $user,
        //     ]);
        // }
    
        // If not using JSON, redirect or return a view
        // For example:
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');

    }

    public function changeAvatar(Request $request)
    {
        // Validate the incoming request data
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Delete the previous avatar if it exists
        if ($user->avatar) {
            // Delete the previous avatar file
            Storage::disk('public')->delete($user->avatar);

            // Update the user's avatar field in the database
            $user->avatar = null;
            $user->save();
        }

        // Upload and store the new avatar
        // $avatarPath = $request->file('avatar')->store('avatars', 'public');
        // $user->avatar = $avatarPath;
        // $user->save();

        $image = $request->file('avatar');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/images/profile');
        $image->move($destinationPath, $name);
    
        $user->avatar = 'assets/images/profile/'.$name;
        $user->save();

        // Return a response
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Avatar changed successfully.',
                'data' => $user,
            ]);
        }

        // If not using JSON, redirect or return a view
        // For example:
        return redirect()->route('profile')->with('success', 'Avatar changed successfully.');
    }

    public function changePassword(Request $request)
    {
      
      $this->validate($request, [
        'old_password' => 'required',
        'new_password' => 'required|min:6',
      ]);
  
      $user = User::find(Auth::user()->id);
      if (Hash::check($request->old_password, $user->password)) {
        # code...
        $user->password = Hash::make($request->new_password);
        $user->save();
        //return redirect()->back()->with('success', 'Password changed successfully.');
        return response()->json(['success' => 'Password changed successfully.']);
      } else {
        return response()->json(['error' => 'Old password is incorrect.']);
      }
  
    }

    public function getUserOptedInPrograms($userId)
    {
        try{

            $user = User::findOrFail($userId);

            $optedInPrograms = $user->optedInPrograms()->with('program')->get();
            
            return response()->json($optedInPrograms);

        }
        catch(\Exception $e){
            return response()->json([
                'error'   => true,
                'message' => $e->getMessage()
            ]);
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        if ($request->wantsJson()) {
            // Clear user data from async storage (replace with your logic)
            // For example: AsyncStorage.removeItem('userToken');
    
            return response()->json(['message' => 'Logged out successfully']);
        }
    
        Session::flush(); // Clear the user session
    
        return redirect()->route('login'); // Redirect HTML users to login page
    }

    public function profile(){
        return view('users.profile');
    }

}
