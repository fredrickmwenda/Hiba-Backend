<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SocialLoginCreateRequest;
use App\Http\Requests\SocialLoginUpdateRequest;
use App\Repositories\SocialLoginRepository;
use App\Validators\SocialLoginValidator;

/**
 * Class SocialLoginsController.
 *
 * @package namespace App\Http\Controllers;
 */
class SocialLoginsController extends Controller
{
    protected $redirectTo = '/dashboard';
    // protected $socialLoginRepository;
    /**
     * @var SocialLoginRepository
     */
    protected $repository;

    /**
     * @var SocialLoginValidator
     */
    protected $validator;

    /**
     * SocialLoginsController constructor.
     *
     * @param SocialLoginRepository $repository
     * @param SocialLoginValidator $validator
     */
    public function __construct(SocialLoginRepository $repository, SocialLoginValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    public function callback($provider)
    {
        try {
            // get user info from social site
            //check if provider is twitter
            if ($provider == 'twitter') {
                $social_info = Socialite::driver($provider)->user();
            } 
            else  if($provider == "google")
            {
                $social_info = Socialite::driver($provider)->stateless()->user();
            }
            else if ($provider == 'facebook'){
                $social_info = Socialite::driver($provider)->stateless()->user();
            }
            else{
                throw new \Exception('Invalid provider: ' . $provider);
            }
            
        } catch (\Exception $e) {
            return new  JsonResponse(['error' => 'login failed'],  401);
            // return redirect()->route('login')->with('error', 'Login failed');
            
        }

        // check for existing user using the repository
        $existing_user = $this->socialLoginRepository->findByField('email', $social_info->getEmail())->first();

        if ($existing_user) {
            auth()->login($existing_user, true);
            return redirect()->to('/dashboard');
        }
    
        $new_user = $this->createUser($social_info);
    
        auth()->login($new_user, true);
    
        return redirect()->to('/dashboard');
    }


    public function createUser(SocialiteUser $social_info)
    {
  

        $user = User::where('email', $social_info->email)->first();

       

        if (!$user) {
            $user = User::create([
                'name' => $social_info->name,
                'email' => $social_info->email,
                'phone' => $social_info->phone,
                'password'   => Hash::make($social_info->id),
            ]);

            $user_info = new UserInfo;
            $user_info->avatar = $social_info->getAvatar();
            $user_info->user()->associate($user);
            $user_info->save();

            if ($user->markEmailAsVerified()) {
                event(new Verified($user));
            }
        }

        return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $socialLogins = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $socialLogins,
            ]);
        }

        return view('socialLogins.index', compact('socialLogins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SocialLoginCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(SocialLoginCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $socialLogin = $this->repository->create($request->all());

            $response = [
                'message' => 'SocialLogin created.',
                'data'    => $socialLogin->toArray(),
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
        $socialLogin = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $socialLogin,
            ]);
        }

        return view('socialLogins.show', compact('socialLogin'));
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
        $socialLogin = $this->repository->find($id);

        return view('socialLogins.edit', compact('socialLogin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SocialLoginUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(SocialLoginUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $socialLogin = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'SocialLogin updated.',
                'data'    => $socialLogin->toArray(),
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
                'message' => 'SocialLogin deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'SocialLogin deleted.');
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleSocialLogin(Request $request)
    {
        try {
            // Validate the request data using SocialLoginCreateRequest rules
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            
            // Here, you can process the social login data and perform the necessary actions
            // For example, check the provider and access token, and create or log in the user.

            // Assuming you receive the provider and access token in the request's input
            $provider = $request->input('provider');
            $accessToken = $request->input('access_token');

            // Your social login handling code goes here...

            // Return a success response if the social login is successful
            return response()->json([
                'success' => true,
                'message' => 'Social login successful.',
                // Add any additional data you want to return to the client
            ]);

        } catch (ValidatorException $e) {
            // If validation fails, return an error response with the validation messages
            return response()->json([
                'success' => false,
                'message' => 'Validation error.',
                'errors' => $e->getMessageBag()->toArray(),
            ], 422);
        } catch (\Exception $e) {
            // Handle other exceptions, such as authentication errors or database errors
            return response()->json([
                'success' => false,
                'message' => 'Social login failed.',
            ], 500);
        }
    }

}
