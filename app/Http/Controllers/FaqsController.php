<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\FaqCreateRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Repositories\FaqRepository;
use App\Validators\FaqValidator;

/**
 * Class FaqsController.
 *
 * @package namespace App\Http\Controllers;
 */
class FaqsController extends Controller
{
    /**
     * @var FaqRepository
     */
    protected $repository;

    /**
     * @var FaqValidator
     */
    protected $validator;

    /**
     * FaqsController constructor.
     *
     * @param FaqRepository $repository
     * @param FaqValidator $validator
     */
    public function __construct(FaqRepository $repository, FaqValidator $validator)
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
        $faqs = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $faqs,
            ]);
        }

        return view('faqs.index', compact('faqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FaqCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(FaqCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $faq = $this->repository->create($request->all());

            $response = [
                'message' => 'Faq created.',
                'data'    => $faq->toArray(),
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
        $faq = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $faq,
            ]);
        }

        return view('faqs.show', compact('faq'));
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
        $faq = $this->repository->find($id);

        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FaqUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(FaqUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $faq = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Faq updated.',
                'data'    => $faq->toArray(),
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
                'message' => 'Faq deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Faq deleted.');
    }
}
