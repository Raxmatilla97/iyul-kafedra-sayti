<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOqituvchilarRequest;
use App\Http\Requests\UpdateOqituvchilarRequest;
use App\Repositories\OqituvchilarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OqituvchilarController extends AppBaseController
{
    /** @var  OqituvchilarRepository */
    private $oqituvchilarRepository;

    public function __construct(OqituvchilarRepository $oqituvchilarRepo)
    {
        $this->oqituvchilarRepository = $oqituvchilarRepo;
    }

    /**
     * Display a listing of the Oqituvchilar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $oqituvchilars = $this->oqituvchilarRepository->all();

        return view('oqituvchilars.index')
            ->with('oqituvchilars', $oqituvchilars);
    }

    /**
     * Show the form for creating a new Oqituvchilar.
     *
     * @return Response
     */
    public function create()
    {
        return view('oqituvchilars.create');
    }

    /**
     * Store a newly created Oqituvchilar in storage.
     *
     * @param CreateOqituvchilarRequest $request
     *
     * @return Response
     */
    public function store(CreateOqituvchilarRequest $request)
    {
        $input = $request->all();

        $oqituvchilar = $this->oqituvchilarRepository->create($input);

        Flash::success('Oqituvchilar saved successfully.');

        return redirect(route('oqituvchilars.index'));
    }

    /**
     * Display the specified Oqituvchilar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oqituvchilar = $this->oqituvchilarRepository->find($id);

        if (empty($oqituvchilar)) {
            Flash::error('Oqituvchilar not found');

            return redirect(route('oqituvchilars.index'));
        }

        return view('oqituvchilars.show')->with('oqituvchilar', $oqituvchilar);
    }

    /**
     * Show the form for editing the specified Oqituvchilar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oqituvchilar = $this->oqituvchilarRepository->find($id);

        if (empty($oqituvchilar)) {
            Flash::error('Oqituvchilar not found');

            return redirect(route('oqituvchilars.index'));
        }

        return view('oqituvchilars.edit')->with('oqituvchilar', $oqituvchilar);
    }

    /**
     * Update the specified Oqituvchilar in storage.
     *
     * @param int $id
     * @param UpdateOqituvchilarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOqituvchilarRequest $request)
    {
        $oqituvchilar = $this->oqituvchilarRepository->find($id);

        if (empty($oqituvchilar)) {
            Flash::error('Oqituvchilar not found');

            return redirect(route('oqituvchilars.index'));
        }

        $oqituvchilar = $this->oqituvchilarRepository->update($request->all(), $id);

        Flash::success('Oqituvchilar updated successfully.');

        return redirect(route('oqituvchilars.index'));
    }

    /**
     * Remove the specified Oqituvchilar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oqituvchilar = $this->oqituvchilarRepository->find($id);

        if (empty($oqituvchilar)) {
            Flash::error('Oqituvchilar not found');

            return redirect(route('oqituvchilars.index'));
        }

        $this->oqituvchilarRepository->delete($id);

        Flash::success('Oqituvchilar deleted successfully.');

        return redirect(route('oqituvchilars.index'));
    }
}
