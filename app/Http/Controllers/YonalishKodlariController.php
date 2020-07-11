<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateYonalishKodlariRequest;
use App\Http\Requests\UpdateYonalishKodlariRequest;
use App\Repositories\YonalishKodlariRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class YonalishKodlariController extends AppBaseController
{
    /** @var  YonalishKodlariRepository */
    private $yonalishKodlariRepository;

    public function __construct(YonalishKodlariRepository $yonalishKodlariRepo)
    {
        $this->yonalishKodlariRepository = $yonalishKodlariRepo;
    }

    /**
     * Display a listing of the YonalishKodlari.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $yonalishKodlaris = $this->yonalishKodlariRepository->all();

        return view('yonalish_kodlaris.index')
            ->with('yonalishKodlaris', $yonalishKodlaris);
    }

    /**
     * Show the form for creating a new YonalishKodlari.
     *
     * @return Response
     */
    public function create()
    {
        return view('yonalish_kodlaris.create');
    }

    /**
     * Store a newly created YonalishKodlari in storage.
     *
     * @param CreateYonalishKodlariRequest $request
     *
     * @return Response
     */
    public function store(CreateYonalishKodlariRequest $request)
    {
        $input = $request->all();

        $yonalishKodlari = $this->yonalishKodlariRepository->create($input);

        Flash::success('Yonalish Kodlari saved successfully.');

        return redirect(route('yonalishKodlaris.index'));
    }

    /**
     * Display the specified YonalishKodlari.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $yonalishKodlari = $this->yonalishKodlariRepository->find($id);

        if (empty($yonalishKodlari)) {
            Flash::error('Yonalish Kodlari not found');

            return redirect(route('yonalishKodlaris.index'));
        }

        return view('yonalish_kodlaris.show')->with('yonalishKodlari', $yonalishKodlari);
    }

    /**
     * Show the form for editing the specified YonalishKodlari.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $yonalishKodlari = $this->yonalishKodlariRepository->find($id);

        if (empty($yonalishKodlari)) {
            Flash::error('Yonalish Kodlari not found');

            return redirect(route('yonalishKodlaris.index'));
        }

        return view('yonalish_kodlaris.edit')->with('yonalishKodlari', $yonalishKodlari);
    }

    /**
     * Update the specified YonalishKodlari in storage.
     *
     * @param int $id
     * @param UpdateYonalishKodlariRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateYonalishKodlariRequest $request)
    {
        $yonalishKodlari = $this->yonalishKodlariRepository->find($id);

        if (empty($yonalishKodlari)) {
            Flash::error('Yonalish Kodlari not found');

            return redirect(route('yonalishKodlaris.index'));
        }

        $yonalishKodlari = $this->yonalishKodlariRepository->update($request->all(), $id);

        Flash::success('Yonalish Kodlari updated successfully.');

        return redirect(route('yonalishKodlaris.index'));
    }

    /**
     * Remove the specified YonalishKodlari from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $yonalishKodlari = $this->yonalishKodlariRepository->find($id);

        if (empty($yonalishKodlari)) {
            Flash::error('Yonalish Kodlari not found');

            return redirect(route('yonalishKodlaris.index'));
        }

        $this->yonalishKodlariRepository->delete($id);

        Flash::success('Yonalish Kodlari deleted successfully.');

        return redirect(route('yonalishKodlaris.index'));
    }
}
