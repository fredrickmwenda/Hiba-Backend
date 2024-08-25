<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ConversionRateCreateRequest;
use App\Http\Requests\ConversionRateUpdateRequest;
use App\Repositories\ConversionRateRepository;
use App\Validators\ConversionRateValidator;

/**
 * Class ConversionRatesController.
 *
 * @package namespace App\Http\Controllers;
 */
class ConversionRatesController extends Controller
{
    /**
     * @var ConversionRateRepository
     */
    protected $repository;

    /**
     * @var ConversionRateValidator
     */
    protected $validator;

    /**
     * ConversionRatesController constructor.
     *
     * @param ConversionRateRepository $repository
     * @param ConversionRateValidator $validator
     */
    public function __construct(ConversionRateRepository $repository, ConversionRateValidator $validator)
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
        $conversionRates = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $conversionRates,
            ]);
        }

        return view('conversionRates.index', compact('conversionRates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ConversionRateCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ConversionRateCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $conversionRate = $this->repository->create($request->all());

            $response = [
                'message' => 'ConversionRate created.',
                'data'    => $conversionRate->toArray(),
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
        $conversionRate = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $conversionRate,
            ]);
        }

        return view('conversionRates.show', compact('conversionRate'));
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
        $conversionRate = $this->repository->find($id);

        return view('conversionRates.edit', compact('conversionRate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ConversionRateUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ConversionRateUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $conversionRate = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ConversionRate updated.',
                'data'    => $conversionRate->toArray(),
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
                'message' => 'ConversionRate deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ConversionRate deleted.');
    }
}
