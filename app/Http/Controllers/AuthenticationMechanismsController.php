<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AuthenticationMechanismCreateRequest;
use App\Http\Requests\AuthenticationMechanismUpdateRequest;
use App\Repositories\AuthenticationMechanismRepository;
use App\Validators\AuthenticationMechanismValidator;

/**
 * Class AuthenticationMechanismsController.
 *
 * @package namespace App\Http\Controllers;
 */
class AuthenticationMechanismsController extends Controller
{
    /**
     * @var AuthenticationMechanismRepository
     */
    protected $repository;

    /**
     * @var AuthenticationMechanismValidator
     */
    protected $validator;

    /**
     * AuthenticationMechanismsController constructor.
     *
     * @param AuthenticationMechanismRepository $repository
     * @param AuthenticationMechanismValidator $validator
     */
    public function __construct(AuthenticationMechanismRepository $repository, AuthenticationMechanismValidator $validator)
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
        $authenticationMechanisms = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $authenticationMechanisms,
            ]);
        }

        return view('authenticationMechanisms.index', compact('authenticationMechanisms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AuthenticationMechanismCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(AuthenticationMechanismCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $authenticationMechanism = $this->repository->create($request->all());

            $response = [
                'message' => 'AuthenticationMechanism created.',
                'data'    => $authenticationMechanism->toArray(),
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
        $authenticationMechanism = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $authenticationMechanism,
            ]);
        }

        return view('authenticationMechanisms.show', compact('authenticationMechanism'));
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
        $authenticationMechanism = $this->repository->find($id);

        return view('authenticationMechanisms.edit', compact('authenticationMechanism'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AuthenticationMechanismUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AuthenticationMechanismUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $authenticationMechanism = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'AuthenticationMechanism updated.',
                'data'    => $authenticationMechanism->toArray(),
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
                'message' => 'AuthenticationMechanism deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'AuthenticationMechanism deleted.');
    }
}
