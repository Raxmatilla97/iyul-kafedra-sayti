<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateXamkorlarRequest;
use App\Http\Requests\UpdateXamkorlarRequest;
use App\Repositories\XamkorlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class XamkorlarController extends AppBaseController
{
    /** @var  XamkorlarRepository */
    private $xamkorlarRepository;

    public function __construct(XamkorlarRepository $xamkorlarRepo)
    {
        $this->xamkorlarRepository = $xamkorlarRepo;
    }

    /**
     * Display a listing of the Xamkorlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $xamkorlars = $this->xamkorlarRepository->all();

        return view('xamkorlars.index')
            ->with('xamkorlars', $xamkorlars);
    }

    /**
     * Show the form for creating a new Xamkorlar.
     *
     * @return Response
     */
    public function create()
    {
        return view('xamkorlars.create');
    }

    /**
     * Store a newly created Xamkorlar in storage.
     *
     * @param CreateXamkorlarRequest $request
     *
     * @return Response
     */
    public function store(CreateXamkorlarRequest $request)
    {
        $input = $request->all();

        $xamkorlar = $this->xamkorlarRepository->create($input);

        Flash::success('Xamkorlar saved successfully.');

        return redirect(route('xamkorlars.index'));
    }

    /**
     * Display the specified Xamkorlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xamkorlar = $this->xamkorlarRepository->find($id);

        if (empty($xamkorlar)) {
            Flash::error('Xamkorlar not found');

            return redirect(route('xamkorlars.index'));
        }

        return view('xamkorlars.show')->with('xamkorlar', $xamkorlar);
    }

    /**
     * Show the form for editing the specified Xamkorlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xamkorlar = $this->xamkorlarRepository->find($id);

        if (empty($xamkorlar)) {
            Flash::error('Xamkorlar not found');

            return redirect(route('xamkorlars.index'));
        }

        return view('xamkorlars.edit')->with('xamkorlar', $xamkorlar);
    }

    /**
     * Update the specified Xamkorlar in storage.
     *
     * @param int $id
     * @param UpdateXamkorlarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXamkorlarRequest $request)
    {
        $xamkorlar = $this->xamkorlarRepository->find($id);

        if (empty($xamkorlar)) {
            Flash::error('Xamkorlar not found');

            return redirect(route('xamkorlars.index'));
        }

        $xamkorlar = $this->xamkorlarRepository->update($request->all(), $id);

        Flash::success('Xamkorlar updated successfully.');

        return redirect(route('xamkorlars.index'));
    }

    /**
     * Remove the specified Xamkorlar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xamkorlar = $this->xamkorlarRepository->find($id);

        if (empty($xamkorlar)) {
            Flash::error('Xamkorlar not found');

            return redirect(route('xamkorlars.index'));
        }

        $this->xamkorlarRepository->delete($id);

        Flash::success('Xamkorlar deleted successfully.');

        return redirect(route('xamkorlars.index'));
    }
}
