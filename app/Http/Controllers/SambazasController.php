<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Auth;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SambazaCreateRequest;
use App\Http\Requests\SambazaUpdateRequest;
use App\Models\CompanyUser;
use App\Repositories\SambazaRepository;
use App\Validators\SambazaValidator;
use App\Models\User;
use App\Models\OptedInPrograms;
use App\Models\Sambaza;
use App\Models\Customer;
Use App\Models\VirtualCard;
use DB;
use Illuminate\Support\Facades\Validator;

/**
 * Class SambazasController.
 *
 * @package namespace App\Http\Controllers;
 */
class SambazasController extends Controller
{
    /**
     * @var SambazaRepository
     */
    protected $repository;

    /**
     * @var SambazaValidator
     */
    protected $validator;

    /**
     * SambazasController constructor.
     *
     * @param SambazaRepository $repository
     * @param SambazaValidator $validator
     */
    public function __construct(SambazaRepository $repository, SambazaValidator $validator)
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
            $sambazas = $this->repository->with('program')->where('company_id', $companyUser->company_id)->get();
        }
        else{
            $sambaza = $this->repository->with('program')->all();
        }

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $sambazas,
            ]);
        }

        return view('sambaza.index', compact('sambazas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SambazaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(SambazaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $sambaza = $this->repository->create($request->all());

            $response = [
                'message' => 'Sambaza created.',
                'data'    => $sambaza->toArray(),
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
        $sambaza = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $sambaza,
            ]);
        }

        return view('sambazas.show', compact('sambaza'));
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
        $sambaza = $this->repository->find($id);

        return view('sambazas.edit', compact('sambaza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SambazaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(SambazaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $sambaza = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Sambaza updated.',
                'data'    => $sambaza->toArray(),
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
                'message' => 'Sambaza deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Sambaza deleted.');
    }


    public function sambaza(Request $request){
        info($request->all());
        try{
            $validator = Validator::make($request->all(), [
                'programId' => 'required|exists:company_programs,id',
                'phone' => 'required|string', // Updated validation rule for phone
                'senderId' => 'required|exists:users,id',
                'transferredPoints' => 'required',
            ]);

            if ($validator->fails()) {
                $response = [
                    'success' => false,
                    'message' => 'Validation failed.',
                    'errors' => $validator->errors(),
                ];
        
                return response()->json($response, 400); // Bad Request
            }
    
            $phone = $request->input('phone');
    
            // Remove prefixes like +254 or 254 and add a leading 0
             // Check if the phone has a prefix of +254 or 254
            if (preg_match('/^(\+254|254)/', $phone)) {
                // Remove prefixes like +254 or 254 and add a leading 0
                $cleanedPhone = preg_replace('/^(\+254|254)/', '0', $phone);
            } else {
                // If there is no prefix, assume it's already in the correct format
                $cleanedPhone = $phone;
            }
    
            // Search for the user with the modified phone number
            $recipient = Customer::where('phone', $cleanedPhone)->first();
    
            if (!$recipient) {
                return response()->json(['success' => false, 'message' => 'Recipient user not found.'], 404);
            }
              
            // $senderId, $recipientId, $transferredPoints, $programId 
            $senderPoints = OptedInPrograms::where('customer_id', $request->senderId)
                ->where('program_id', $request->programId)
                ->first();

            $senderCard = VirtualCard::where('customer_id', $request->senderId)->first();

            $recipientPoints = OptedInPrograms::where('customer_id', $recipient->id)
                ->where('program_id', $request->programId)
                ->first();
            $recipientCard = VirtualCard::where('customer_id', $recipient->id)->first();

            if (!$recipientPoints) {
                    return response()->json(['success' => false,
                    'message' => 'Recipient isnt in the Program.'], 404);
            }
            info('sender points');
            info($senderPoints->earned_points);
            info('sender points');
            info($request->transferredPoints);
            if(!$senderPoints->earned_points >= $request->transferredPoints){
                return response()->json(['success' => false, 'message' => 'Your points are not enough to be transferred'], 400);
            }
         
            $sambaza = Sambaza::create([
                'sender_id' => $request->senderId,
                'recipient_id' => $recipient->id,
                'program_id' => $request->programId,
                'transferred_points' => (float) $request->transferredPoints,
            ]);
            $senderPoints->earned_points -= (float) $request->transferredPoints;
            $senderCard->points  -=  (float) $request->transferredPoints;
            $senderPoints->save();
            $senderCard->save();

         
            $earnedPoints = $recipientPoints->earned_points ?? 0; // Initialize to 0 if null

            $recipientPoints->earned_points += (float) $request->transferredPoints;
            $recipientCard->points  +=  (float) $request->transferredPoints;
            $recipientPoints->save();
            $recipientCard->save();


            //this return true not values
            $response = [
                'success' => true,
                'message' => 'Sambaza is Successfully.',
                'data'    => $sambaza->toArray(),
            ];

            
            if ($request->wantsJson()) {

                return response()->json($response);
            }

           

        }
        catch (ValidationException $e){
           
            
            $errors = $e->errors();
            info($errors);
            
            return response()->json(['success' => false, 'message' => $errors], 500);

        }

    }


    public function searchByPhoneNumber($phoneNumber)
    {
        try {
            $user = User::where('phone', $phoneNumber)->first();

            if ($user) {
                return response()->json(['name' => $user->name]);
            } else {
                return response()->json(['name' => null]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }

}
