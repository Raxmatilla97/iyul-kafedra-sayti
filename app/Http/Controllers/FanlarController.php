<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFanlarRequest;
use App\Http\Requests\UpdateFanlarRequest;
use App\Repositories\FanlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Fanlar;
class FanlarController extends AppBaseController
{
    /** @var  FanlarRepository */
    private $fanlarRepository;

    public function __construct(FanlarRepository $fanlarRepo)
    {
        $this->fanlarRepository = $fanlarRepo;
    }

    /**
     * Display a listing of the Fanlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$fanlars = $this->fanlarRepository->all();

        $fanlars = Fanlar::latest()->orderBy("created_at", 'desc')->paginate(12);
        

        return view('fanlars.index', compact('fanlars'))->with('i',(request()->input('page', 1) -1) *5);
 
    }


    /**
     * Show the form for creating a new Fanlar.
     *
     * @return Response
     */
    public function create()
    {
        return view('fanlars.create');
    }

    /**
     * Store a newly created Fanlar in storage.
     *
     * @param CreateFanlarRequest $request
     *
     * @return Response
     */
    public function store(CreateFanlarRequest $request)
    {
        $input = $request->all();

        $fanlar = $this->fanlarRepository->create($input);

        Flash::success('Fanlar saved successfully.');

        return redirect(route('fanlars.index'));
    }

    /**
     * Display the specified Fanlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fanlar = $this->fanlarRepository->find($id);

        if (empty($fanlar)) {
            Flash::error('Fanlar not found');

            return redirect(route('fanlars.index'));
        }

        return view('fanlars.show')->with('fanlar', $fanlar);
    }

    /**
     * Show the form for editing the specified Fanlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fanlar = $this->fanlarRepository->find($id);

        if (empty($fanlar)) {
            Flash::error('Fanlar not found');

            return redirect(route('fanlars.index'));
        }

        return view('fanlars.edit')->with('fanlar', $fanlar);
    }

    /**
     * Update the specified Fanlar in storage.
     *
     * @param int $id
     * @param UpdateFanlarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFanlarRequest $request)
    {
        $fanlar = $this->fanlarRepository->find($id);

        if (empty($fanlar)) {
            Flash::error('Fanlar not found');

            return redirect(route('fanlars.index'));
        }

        $fanlar = $this->fanlarRepository->update($request->all(), $id);

        Flash::success('Fanlar updated successfully.');

        return redirect(route('fanlars.index'));
    }

    /**
     * Remove the specified Fanlar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fanlar = $this->fanlarRepository->find($id);

        if (empty($fanlar)) {
            Flash::error('Fanlar not found');

            return redirect(route('fanlars.index'));
        }

        $this->fanlarRepository->delete($id);

        Flash::success('Fanlar deleted successfully.');

        return redirect(route('fanlars.index'));
    }
}
