<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOquvTuriRequest;
use App\Http\Requests\UpdateOquvTuriRequest;
use App\Repositories\OquvTuriRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OquvTuriController extends AppBaseController
{
    /** @var  OquvTuriRepository */
    private $oquvTuriRepository;

    public function __construct(OquvTuriRepository $oquvTuriRepo)
    {
        $this->oquvTuriRepository = $oquvTuriRepo;
    }

    /**
     * Display a listing of the OquvTuri.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $oquvTuris = $this->oquvTuriRepository->all();

        return view('oquv_turis.index')
            ->with('oquvTuris', $oquvTuris);
    }

    /**
     * Show the form for creating a new OquvTuri.
     *
     * @return Response
     */
    public function create()
    {
        return view('oquv_turis.create');
    }

    /**
     * Store a newly created OquvTuri in storage.
     *
     * @param CreateOquvTuriRequest $request
     *
     * @return Response
     */
    public function store(CreateOquvTuriRequest $request)
    {
        $input = $request->all();

        $oquvTuri = $this->oquvTuriRepository->create($input);

        Flash::success('Oquv Turi saved successfully.');

        return redirect(route('oquvTuris.index'));
    }

    /**
     * Display the specified OquvTuri.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oquvTuri = $this->oquvTuriRepository->find($id);

        if (empty($oquvTuri)) {
            Flash::error('Oquv Turi not found');

            return redirect(route('oquvTuris.index'));
        }

        return view('oquv_turis.show')->with('oquvTuri', $oquvTuri);
    }

    /**
     * Show the form for editing the specified OquvTuri.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oquvTuri = $this->oquvTuriRepository->find($id);

        if (empty($oquvTuri)) {
            Flash::error('Oquv Turi not found');

            return redirect(route('oquvTuris.index'));
        }

        return view('oquv_turis.edit')->with('oquvTuri', $oquvTuri);
    }

    /**
     * Update the specified OquvTuri in storage.
     *
     * @param int $id
     * @param UpdateOquvTuriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOquvTuriRequest $request)
    {
        $oquvTuri = $this->oquvTuriRepository->find($id);

        if (empty($oquvTuri)) {
            Flash::error('Oquv Turi not found');

            return redirect(route('oquvTuris.index'));
        }

        $oquvTuri = $this->oquvTuriRepository->update($request->all(), $id);

        Flash::success('Oquv Turi updated successfully.');

        return redirect(route('oquvTuris.index'));
    }

    /**
     * Remove the specified OquvTuri from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oquvTuri = $this->oquvTuriRepository->find($id);

        if (empty($oquvTuri)) {
            Flash::error('Oquv Turi not found');

            return redirect(route('oquvTuris.index'));
        }

        $this->oquvTuriRepository->delete($id);

        Flash::success('Oquv Turi deleted successfully.');

        return redirect(route('oquvTuris.index'));
    }
}
