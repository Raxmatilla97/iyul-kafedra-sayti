<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTalabalarGuruhlariRequest;
use App\Http\Requests\UpdateTalabalarGuruhlariRequest;
use App\Repositories\TalabalarGuruhlariRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TalabalarGuruhlariController extends AppBaseController
{
    /** @var  TalabalarGuruhlariRepository */
    private $talabalarGuruhlariRepository;

    public function __construct(TalabalarGuruhlariRepository $talabalarGuruhlariRepo)
    {
        $this->talabalarGuruhlariRepository = $talabalarGuruhlariRepo;
    }

    /**
     * Display a listing of the TalabalarGuruhlari.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $talabalarGuruhlaris = $this->talabalarGuruhlariRepository->all();

        return view('talabalar_guruhlaris.index')
            ->with('talabalarGuruhlaris', $talabalarGuruhlaris);
    }

    /**
     * Show the form for creating a new TalabalarGuruhlari.
     *
     * @return Response
     */
    public function create()
    {
        return view('talabalar_guruhlaris.create');
    }

    /**
     * Store a newly created TalabalarGuruhlari in storage.
     *
     * @param CreateTalabalarGuruhlariRequest $request
     *
     * @return Response
     */
    public function store(CreateTalabalarGuruhlariRequest $request)
    {
        $input = $request->all();

        $talabalarGuruhlari = $this->talabalarGuruhlariRepository->create($input);

        Flash::success('Talabalar Guruhlari saved successfully.');

        return redirect(route('talabalarGuruhlaris.index'));
    }

    /**
     * Display the specified TalabalarGuruhlari.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $talabalarGuruhlari = $this->talabalarGuruhlariRepository->find($id);

        if (empty($talabalarGuruhlari)) {
            Flash::error('Talabalar Guruhlari not found');

            return redirect(route('talabalarGuruhlaris.index'));
        }

        return view('talabalar_guruhlaris.show')->with('talabalarGuruhlari', $talabalarGuruhlari);
    }

    /**
     * Show the form for editing the specified TalabalarGuruhlari.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $talabalarGuruhlari = $this->talabalarGuruhlariRepository->find($id);

        if (empty($talabalarGuruhlari)) {
            Flash::error('Talabalar Guruhlari not found');

            return redirect(route('talabalarGuruhlaris.index'));
        }

        return view('talabalar_guruhlaris.edit')->with('talabalarGuruhlari', $talabalarGuruhlari);
    }

    /**
     * Update the specified TalabalarGuruhlari in storage.
     *
     * @param int $id
     * @param UpdateTalabalarGuruhlariRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTalabalarGuruhlariRequest $request)
    {
        $talabalarGuruhlari = $this->talabalarGuruhlariRepository->find($id);

        if (empty($talabalarGuruhlari)) {
            Flash::error('Talabalar Guruhlari not found');

            return redirect(route('talabalarGuruhlaris.index'));
        }

        $talabalarGuruhlari = $this->talabalarGuruhlariRepository->update($request->all(), $id);

        Flash::success('Talabalar Guruhlari updated successfully.');

        return redirect(route('talabalarGuruhlaris.index'));
    }

    /**
     * Remove the specified TalabalarGuruhlari from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $talabalarGuruhlari = $this->talabalarGuruhlariRepository->find($id);

        if (empty($talabalarGuruhlari)) {
            Flash::error('Talabalar Guruhlari not found');

            return redirect(route('talabalarGuruhlaris.index'));
        }

        $this->talabalarGuruhlariRepository->delete($id);

        Flash::success('Talabalar Guruhlari deleted successfully.');

        return redirect(route('talabalarGuruhlaris.index'));
    }
}
