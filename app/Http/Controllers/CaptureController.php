<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaptureRequest;
use App\Http\Requests\UpdateCaptureRequest;
use App\Repositories\CaptureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CaptureController extends AppBaseController
{
    /** @var  CaptureRepository */
    private $captureRepository;

    public function __construct(CaptureRepository $captureRepo)
    {
        $this->captureRepository = $captureRepo;
    }

    /**
     * Display a listing of the Capture.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->captureRepository->pushCriteria(new RequestCriteria($request));
        $captures = $this->captureRepository->all();

        return view('captures.index')
            ->with('captures', $captures);
    }

    /**
     * Show the form for creating a new Capture.
     *
     * @return Response
     */
    public function create()
    {
        return view('captures.create');
    }

    /**
     * Store a newly created Capture in storage.
     *
     * @param CreateCaptureRequest $request
     *
     * @return Response
     */
    public function store(CreateCaptureRequest $request)
    {
        $input = $request->all();

        $capture = $this->captureRepository->create($input);

        Flash::success('Capture saved successfully.');

        return redirect(route('captures.index'));
    }

    /**
     * Display the specified Capture.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $capture = $this->captureRepository->findWithoutFail($id);

        if (empty($capture)) {
            Flash::error('Capture not found');

            return redirect(route('captures.index'));
        }

        return view('captures.show')->with('capture', $capture);
    }

    /**
     * Show the form for editing the specified Capture.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $capture = $this->captureRepository->findWithoutFail($id);

        if (empty($capture)) {
            Flash::error('Capture not found');

            return redirect(route('captures.index'));
        }

        return view('captures.edit')->with('capture', $capture);
    }

    /**
     * Update the specified Capture in storage.
     *
     * @param  int              $id
     * @param UpdateCaptureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaptureRequest $request)
    {
        $capture = $this->captureRepository->findWithoutFail($id);

        if (empty($capture)) {
            Flash::error('Capture not found');

            return redirect(route('captures.index'));
        }

        $capture = $this->captureRepository->update($request->all(), $id);

        Flash::success('Capture updated successfully.');

        return redirect(route('captures.index'));
    }

    /**
     * Remove the specified Capture from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $capture = $this->captureRepository->findWithoutFail($id);

        if (empty($capture)) {
            Flash::error('Capture not found');

            return redirect(route('captures.index'));
        }

        $this->captureRepository->delete($id);

        Flash::success('Capture deleted successfully.');

        return redirect(route('captures.index'));
    }


}
