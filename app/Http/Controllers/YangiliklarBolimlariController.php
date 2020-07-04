<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateYangiliklarBolimlariRequest;
use App\Http\Requests\UpdateYangiliklarBolimlariRequest;
use App\Repositories\YangiliklarBolimlariRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\YangiliklarBolimlari;

class YangiliklarBolimlariController extends AppBaseController
{
    /** @var  YangiliklarBolimlariRepository */
    private $yangiliklarBolimlariRepository;

    public function __construct(YangiliklarBolimlariRepository $yangiliklarBolimlariRepo)
    {
        $this->yangiliklarBolimlariRepository = $yangiliklarBolimlariRepo;
    }

    /**
     * Display a listing of the YangiliklarBolimlari.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$yangiliklarBolimlaris = $this->yangiliklarBolimlariRepository->all();

        $yangiliklarBolimlaris = YangiliklarBolimlari::latest()->orderBy("created_at", 'desc')->paginate(12);
        

        return view('yangiliklar_bolimlaris.index', compact('yangiliklarBolimlaris'))->with('i',(request()->input('page', 1) -1) *5);

    }

    /**
     * Show the form for creating a new YangiliklarBolimlari.
     *
     * @return Response
     */
    public function create()
    {
        return view('yangiliklar_bolimlaris.create');
    }

    /**
     * Store a newly created YangiliklarBolimlari in storage.
     *
     * @param CreateYangiliklarBolimlariRequest $request
     *
     * @return Response
     */
    public function store(CreateYangiliklarBolimlariRequest $request)
    {
        $input = $request->all();

        $yangiliklarBolimlari = $this->yangiliklarBolimlariRepository->create($input);

        Flash::success('Yangiliklar Bolimlari saved successfully.');

        return redirect(route('yangiliklarBolimlaris.index'));
    }

    /**
     * Display the specified YangiliklarBolimlari.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $yangiliklarBolimlari = $this->yangiliklarBolimlariRepository->find($id);

        if (empty($yangiliklarBolimlari)) {
            Flash::error('Yangiliklar Bolimlari not found');

            return redirect(route('yangiliklarBolimlaris.index'));
        }

        return view('yangiliklar_bolimlaris.show')->with('yangiliklarBolimlari', $yangiliklarBolimlari);
    }

    /**
     * Show the form for editing the specified YangiliklarBolimlari.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $yangiliklarBolimlari = $this->yangiliklarBolimlariRepository->find($id);

        if (empty($yangiliklarBolimlari)) {
            Flash::error('Yangiliklar Bolimlari not found');

            return redirect(route('yangiliklarBolimlaris.index'));
        }

        return view('yangiliklar_bolimlaris.edit')->with('yangiliklarBolimlari', $yangiliklarBolimlari);
    }

    /**
     * Update the specified YangiliklarBolimlari in storage.
     *
     * @param int $id
     * @param UpdateYangiliklarBolimlariRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateYangiliklarBolimlariRequest $request)
    {
        $yangiliklarBolimlari = $this->yangiliklarBolimlariRepository->find($id);

        if (empty($yangiliklarBolimlari)) {
            Flash::error('Yangiliklar Bolimlari not found');

            return redirect(route('yangiliklarBolimlaris.index'));
        }

        $yangiliklarBolimlari = $this->yangiliklarBolimlariRepository->update($request->all(), $id);

        Flash::success('Yangiliklar Bolimlari updated successfully.');

        return redirect(route('yangiliklarBolimlaris.index'));
    }

    /**
     * Remove the specified YangiliklarBolimlari from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $yangiliklarBolimlari = $this->yangiliklarBolimlariRepository->find($id);

        if (empty($yangiliklarBolimlari)) {
            Flash::error('Yangiliklar Bolimlari not found');

            return redirect(route('yangiliklarBolimlaris.index'));
        }

        $this->yangiliklarBolimlariRepository->delete($id);

        Flash::success('Yangiliklar Bolimlari deleted successfully.');

        return redirect(route('yangiliklarBolimlaris.index'));
    }
}
