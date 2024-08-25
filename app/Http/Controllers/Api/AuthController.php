<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use App\Models\Customer;
use App\Models\VirtualCard;
use Hash;
use Laravel\Passport\Passport;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DNS1D;
use DB;
use App\Helpers\PhoneHelper;


class AuthController extends Controller
{

    public function storePublicKey(Request $request)
    {
        // Validate the request
        $request->validate([
            'publicKey' => 'required|string',
        ]);

        // Store the public key in the database
        // Make sure you adjust the model and attribute names as per your setup
        $customer = Auth::guard('api')->user(); // Assuming you're using the 'api' guard
        try {
            $customer->public_key = $request->input('publicKey');
            $customer->save();
            $token = $customer->createToken('hiiba');
            // $token -= auth()->user()->createToken('hiiba')->accessToken;
            $response = [
                'message' => 'Public key stored successfully',
                'customer' => $customer,
                'token' => $token->accessToken

            ];
            return response()->json([$response], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        if(!PhoneHelper::checkPhoneNumber($request->phone)){
            response()->json(['errors' => 'Phone number is not valid in Kenya'], 400);
        }
        // $name = 'ProgramUser';
        // $role = Role::where('name', $name)->first();
        // \info($role->id);
        // $role_id = $role->id;
        // if (!$role) {
        //     // Handle the case where the role doesn't exist
        //     return response()->json(['error' => 'Role not found'], 404);
        // }
    
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
       

      
        
        
        // Authenticate the customer
        

        //create virtual card for the user
        $qr_data = QrCode::generate('hiiba'.$customer->id.$customer->name);
        $svgStart = strpos($qr_data, '<svg');
        $svgEnd = strpos($qr_data, '</svg>') + 6;
        $svgContent = substr($qr_data, $svgStart, $svgEnd - $svgStart);

        // Save the SVG content to a file in the public folder
        // Define the subfolder path within the public folder
        $subfolderPath = 'assets/images/virtualcard';

        // Create the subfolder if it doesn't exist
        $fullSubfolderPath = public_path($subfolderPath);
        if (!file_exists($fullSubfolderPath)) {
            mkdir($fullSubfolderPath, 0777, true);
        }

        // Generate a unique SVG filename
        $svgFilename = 'qrcode_'.$customer->id.'_'.uniqid().'.svg';

        // Save the SVG content to a file in the subfolder
        $svgFilePath = $fullSubfolderPath . '/' . $svgFilename;
        file_put_contents($svgFilePath, $svgContent);

        $barcodeData = 'hiiba' . $customer->id . $customer->name;
        $barcodeSVG = DNS1D::getBarcodeSVG($barcodeData, 'C128', 2, 100);
        
        
        // Generate a unique SVG filename
        $barsvgFilename = 'barcode_'.$customer->id.'_'.uniqid().'.svg';
        
        // Save the SVG content to a file in the subfolder
        $barsvgFilePath = $fullSubfolderPath . '/' . $barsvgFilename;
        file_put_contents($barsvgFilePath, $barcodeSVG);
        info($customer->id);
        info($svgFilePath);
        info($barsvgFilePath);
        //create a virtual card for the customer
    
        $cardNumber = strval($customer->id) . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        VirtualCard::create([
            'customer_id' => $customer->id,
            'card_number' => $cardNumber,
            'barcode' => $barsvgFilePath,
            'qr-code' => $svgFilePath,
            'points' => '0'
        ]);

        $customer->load('virtualCard');
        

        $token = $customer->createToken('hiiba');
        //send customercreation notification
        ///take unhash password from the request and wrap it up in customer object
        
        return response()->json(['message' => 'User registered successfully', 'customer' => $customer, 'access_token' => $token->accessToken], 201);

        // Send OTP to customer's phone
        // $this->sendOTP($customer->phone);

        //LoginMechanism::create(['customer_id'=> $customer->id]);

        //return response()->json([$response], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        info($credentials);

        if (!Auth::guard('customers')->attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials.'], 401);
        }
       
        $customer = Auth::guard('customers')->user();
        info($customer);
        $customer->load('optedInPrograms'); 
        $customer->load('virtualCard', 'optedInPrograms.Program.company', 'sentSambazas', 'receivedSambazas', 'redemptions'); // Load relationships
        $token = $customer->createToken('hiiba'); 

 
        return response()->json(['message' => 'Login successful', 'user' => $customer, 'access_token' => $token->accessToken], 201);
    }

    public function setLoginMechanism(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'login_mechanism' => 'required|in:touchid,otp',
        ]);

        $user->login_mechanism = $request->login_mechanism;
        $user->save();

        return response()->json(['message' => 'Login mechanism updated successfully.']);
    }

     // Social login and registration
     public function socialLogin(Request $request)
     {
         // Validate the request data
         $request->validate([
             'userInfo' => 'required|array', // Validate the customerInfo array
             'process' => 'required|in:registration,login',
             'loginType' => 'required|in:facebook,google,twitter',
         ]);
 
         $customerInfo = $request->input('customerInfo');
         $process = $request->input('process');
         $loginType = $request->input('loginType');
 
         // Handle registration or login based on $process and $loginType
         if ($process === 'registration') {
             return $this->registerCustomer($customerInfo, $loginType);
         } elseif ($process === 'login') {
             return $this->loginCustomer($customerInfo, $loginType);
         }
 
         // Handle other cases as needed
     }
 
     // Handle user registration
     private function registerCustomer($customerInfo, $loginType)
     {

         // Perform user registration logic here
         // Create a new user in the database with $customerInfo and $loginType
         
         // Return a success or error response
         return response()->json(['success' => true, 'message' => 'Registration successful']);
     }
 
     // Handle customer login
     private function loginCustomer($customerInfo, $loginType)
     {
         // Perform customer login logic here
         // Verify $customerInfo and $loginType, and check if the user exists in the database
         
         // Return a success or error response
         return response()->json(['success' => true, 'message' => 'Login successful']);
     }


}
