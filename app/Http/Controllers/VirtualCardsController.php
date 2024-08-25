<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\VirtualCardCreateRequest;
use App\Http\Requests\VirtualCardUpdateRequest;
use App\Models\CompanyUser;
use App\Repositories\VirtualCardRepository;
use App\Validators\VirtualCardValidator;
use Auth;

/**
 * Class VirtualCardsController.
 *
 * @package namespace App\Http\Controllers;
 */
class VirtualCardsController extends Controller
{
    /**
     * @var VirtualCardRepository
     */
    protected $repository;

    /**
     * @var VirtualCardValidator
     */
    protected $validator;

    /**
     * VirtualCardsController constructor.
     *
     * @param VirtualCardRepository $repository
     * @param VirtualCardValidator $validator
     */
    public function __construct(VirtualCardRepository $repository, VirtualCardValidator $validator)
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
        //$user = Auth::user();
        // if($user->hasRole('Employee') ||$user->hasRole('CompanyAdmin') ){
        //     //get the virtual cards of users in the company customer tabler
        // }

            $virtualCards = $this->repository->all();
        

        

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $virtualCards,
            ]);
        }

        return view('virtualCards.index', compact('virtualCards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  VirtualCardCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(VirtualCardCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $virtualCard = $this->repository->create($request->all());

            $response = [
                'message' => 'VirtualCard created.',
                'data'    => $virtualCard->toArray(),
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
        $virtualCard = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $virtualCard,
            ]);
        }

        return view('virtualCards.show', compact('virtualCard'));
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
        $virtualCard = $this->repository->find($id);

        return view('virtualCards.edit', compact('virtualCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VirtualCardUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(VirtualCardUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $virtualCard = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'VirtualCard updated.',
                'data'    => $virtualCard->toArray(),
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
                'message' => 'VirtualCard deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'VirtualCard deleted.');
    }
}
