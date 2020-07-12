<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGallereyaRequest;
use App\Http\Requests\UpdateGallereyaRequest;
use App\Models\GallereyaCategory;
use App\Repositories\GallereyaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Gallereya;

class GallereyaController extends AppBaseController
{
    /** @var  GallereyaRepository */
    private $gallereyaRepository;

    public function __construct(GallereyaRepository $gallereyaRepo)
    {
        $this->gallereyaRepository = $gallereyaRepo;
    }

    /**
     * Display a listing of the Gallereya.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$gallereyas = $this->gallereyaRepository->all();

        $gallereyas = Gallereya::latest()->orderBy("created_at", 'desc')->paginate(10);


        return view('gallereyas.index', compact('gallereyas'))->with('i',(request()->input('page', 1) -1) *5);

/*
        return view('gallereyas.index')
            ->with('gallereyas', $gallereyas); */
    }

    /**
     * Show the form for creating a new Gallereya.
     *
     * @return Response
     */
    public function create()
    {
        $category = GallereyaCategory::pluck('title', 'id');
        return view('gallereyas.create', compact('category'));
    }

    /**
     * Store a newly created Gallereya in storage.
     *
     * @param CreateGallereyaRequest $request
     *
     * @return Response
     */
    public function store(CreateGallereyaRequest $request)
    {
        $input = $request->all();

        $gallereya = $this->gallereyaRepository->create($input);

        Flash::success('Gallereya saved successfully.');

        return redirect(route('gallereyas.index'));
    }

    /**
     * Display the specified Gallereya.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallereya = $this->gallereyaRepository->find($id);

        if (empty($gallereya)) {
            Flash::error('Gallereya not found');

            return redirect(route('gallereyas.index'));
        }

        return view('gallereyas.show')->with('gallereya', $gallereya);
    }

    /**
     * Show the form for editing the specified Gallereya.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = GallereyaCategory::pluck('title', 'id');
        $gallereya = $this->gallereyaRepository->find($id);

        if (empty($gallereya)) {
            Flash::error('Gallereya not found');

            return redirect(route('gallereyas.index'));
        }

        return view('gallereyas.edit', compact('category'))->with('gallereya', $gallereya);
    }

    /**
     * Update the specified Gallereya in storage.
     *
     * @param int $id
     * @param UpdateGallereyaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGallereyaRequest $request)
    {
        $gallereya = $this->gallereyaRepository->find($id);

        if (empty($gallereya)) {
            Flash::error('Gallereya not found');

            return redirect(route('gallereyas.index'));
        }

        $gallereya = $this->gallereyaRepository->update($request->all(), $id);

        Flash::success('Gallereya updated successfully.');

        return redirect(route('gallereyas.index'));
    }

    /**
     * Remove the specified Gallereya from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallereya = $this->gallereyaRepository->find($id);

        if (empty($gallereya)) {
            Flash::error('Gallereya not found');

            return redirect(route('gallereyas.index'));
        }

        $this->gallereyaRepository->delete($id);

        Flash::success('Gallereya deleted successfully.');

        return redirect(route('gallereyas.index'));
    }
}
