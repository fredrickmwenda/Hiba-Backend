<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TransactionCreateRequest;
use App\Http\Requests\TransactionUpdateRequest;
use App\Models\Redemption;
use App\Models\Sambaza;
use App\Repositories\TransactionRepository;
use App\Validators\TransactionValidator;

/**
 * Class TransactionsController.
 *
 * @package namespace App\Http\Controllers;
 */
class TransactionsController extends Controller
{
    /**
     * @var TransactionRepository
     */
    protected $repository;

    /**
     * @var TransactionValidator
     */
    protected $validator;

    /**
     * TransactionsController constructor.
     *
     * @param TransactionRepository $repository
     * @param TransactionValidator $validator
     */
    public function __construct(TransactionRepository $repository, TransactionValidator $validator)
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
        $transactions = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $transactions,
            ]);
        }

        return view('transactions.index', compact('transactions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TransactionCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(TransactionCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $transaction = $this->repository->create($request->all());

            $response = [
                'message' => 'Transaction created.',
                'data'    => $transaction->toArray(),
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
        $transaction = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $transaction,
            ]);
        }

        return view('transactions.show', compact('transaction'));
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
        $transaction = $this->repository->find($id);

        return view('transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TransactionUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(TransactionUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $transaction = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Transaction updated.',
                'data'    => $transaction->toArray(),
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
                'message' => 'Transaction deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Transaction deleted.');
    }


    //get UserTransactions

    public function getUserTransactions(Request $request){
        try{
            $customer  = auth('api')->user();
    
            $redemptions = Redemption::where('customer_id', $customer->id)->with('program.company')->get();
            foreach ($redemptions as $redemption) {
                $redemption->type = 'redemption';
            }
    
            $sambazasSent = Sambaza::where('sender_id', $customer->id)->with('program.company')->get();
            foreach ($sambazasSent as $sambaza) {
                $sambaza->type = 'sent';
            }
    
            $sambazasReceived = Sambaza::where('recipient_id', $customer->id)->with('program.company')->get();
            foreach ($sambazasReceived as $sambaza) {
                $sambaza->type = 'received';
            }
    
            $transactions = $redemptions->concat($sambazasSent)->concat($sambazasReceived);
    
            return response()->json([
                'success' => true,
                'data' => $transactions,
            ]);
    
        }catch (\Exception $e) {
            // Handle exceptions here
            return response()->json([
                'success' => false,
                'message' => 'Getting User Transactions failed ' . $e->getMessage(),
            ]);
        }
    }
    
    
}
