<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    public function redirectTo()
    { 
        $user = Auth::user();
        if ($user->hasRole('CompanyAdmin') ||  $user->hasRole('Employee')) {
            return '/company/dashboard';
        } else {
            //dd('nope');
            return '/dashboard';
        }

    }

    //Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    // Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('main.index');
    }

    //Twitter login
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    // Twitter callback
    public function handleTwitterCallback()
    {
        $user = Socialite::driver('twitter')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('main.index');
    }

    // protected function _registerOrLoginUser($data)
    // {
    //     $user = User::where('email', '=', $data->email)->first();

    //     if (!$user) {
    //         $user = new User();
    //         $user->name = $data->name;
    //         $user->email = $data->email;
    //         $user->provider_id = $data->id;
    //         $user->avatar = $data->avatar;
    //         $user->role = 3;
    //         $user->email_verified_at = now();
    //         $user->save();

    //         $full=$data->name;
    //         $full1=explode(' ', $full);
    //         $first=$full1[0];
    //         $rest=ltrim($full, $first.' ');

    //         $student  = new Student();
    //         $student->user_id = $user->id;
    //         $student->first_name = $first;
    //         $student->last_name = $rest;
    //         $student->status = get_option('private_mode') ? STATUS_PENDING : STATUS_ACCEPTED;
    //         $student->save();
    //     }else{
    //         $student = $user->student;
    //     }

    //     if($student->status != STATUS_PENDING){
    //         Auth::login($user);
    //     }
    // }
}
