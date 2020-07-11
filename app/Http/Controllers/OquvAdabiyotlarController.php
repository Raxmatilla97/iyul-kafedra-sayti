<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOquvAdabiyotlarRequest;
use App\Http\Requests\UpdateOquvAdabiyotlarRequest;
use App\Repositories\OquvAdabiyotlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OquvAdabiyotlarController extends AppBaseController
{
    /** @var  OquvAdabiyotlarRepository */
    private $oquvAdabiyotlarRepository;

    public function __construct(OquvAdabiyotlarRepository $oquvAdabiyotlarRepo)
    {
        $this->oquvAdabiyotlarRepository = $oquvAdabiyotlarRepo;
    }

    /**
     * Display a listing of the OquvAdabiyotlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $oquvAdabiyotlars = $this->oquvAdabiyotlarRepository->all();

        return view('oquv_adabiyotlars.index')
            ->with('oquvAdabiyotlars', $oquvAdabiyotlars);
    }

    /**
     * Show the form for creating a new OquvAdabiyotlar.
     *
     * @return Response
     */
    public function create()
    {
        return view('oquv_adabiyotlars.create');
    }

    /**
     * Store a newly created OquvAdabiyotlar in storage.
     *
     * @param CreateOquvAdabiyotlarRequest $request
     *
     * @return Response
     */
    public function store(CreateOquvAdabiyotlarRequest $request)
    {
        $input = $request->all();

        $oquvAdabiyotlar = $this->oquvAdabiyotlarRepository->create($input);

        Flash::success('Oquv Adabiyotlar saved successfully.');

        return redirect(route('oquvAdabiyotlars.index'));
    }

    /**
     * Display the specified OquvAdabiyotlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oquvAdabiyotlar = $this->oquvAdabiyotlarRepository->find($id);

        if (empty($oquvAdabiyotlar)) {
            Flash::error('Oquv Adabiyotlar not found');

            return redirect(route('oquvAdabiyotlars.index'));
        }

        return view('oquv_adabiyotlars.show')->with('oquvAdabiyotlar', $oquvAdabiyotlar);
    }

    /**
     * Show the form for editing the specified OquvAdabiyotlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oquvAdabiyotlar = $this->oquvAdabiyotlarRepository->find($id);

        if (empty($oquvAdabiyotlar)) {
            Flash::error('Oquv Adabiyotlar not found');

            return redirect(route('oquvAdabiyotlars.index'));
        }

        return view('oquv_adabiyotlars.edit')->with('oquvAdabiyotlar', $oquvAdabiyotlar);
    }

    /**
     * Update the specified OquvAdabiyotlar in storage.
     *
     * @param int $id
     * @param UpdateOquvAdabiyotlarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOquvAdabiyotlarRequest $request)
    {
        $oquvAdabiyotlar = $this->oquvAdabiyotlarRepository->find($id);

        if (empty($oquvAdabiyotlar)) {
            Flash::error('Oquv Adabiyotlar not found');

            return redirect(route('oquvAdabiyotlars.index'));
        }

        $oquvAdabiyotlar = $this->oquvAdabiyotlarRepository->update($request->all(), $id);

        Flash::success('Oquv Adabiyotlar updated successfully.');

        return redirect(route('oquvAdabiyotlars.index'));
    }

    /**
     * Remove the specified OquvAdabiyotlar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oquvAdabiyotlar = $this->oquvAdabiyotlarRepository->find($id);

        if (empty($oquvAdabiyotlar)) {
            Flash::error('Oquv Adabiyotlar not found');

            return redirect(route('oquvAdabiyotlars.index'));
        }

        $this->oquvAdabiyotlarRepository->delete($id);

        Flash::success('Oquv Adabiyotlar deleted successfully.');

        return redirect(route('oquvAdabiyotlars.index'));
    }
}
