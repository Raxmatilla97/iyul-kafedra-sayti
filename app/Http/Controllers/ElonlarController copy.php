<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateElonlarRequest;
use App\Http\Requests\UpdateElonlarRequest;
use App\Repositories\ElonlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Elonlar;
class ElonlarController extends AppBaseController
{
    /** @var  ElonlarRepository */
    private $elonlarRepository;

    public function __construct(ElonlarRepository $elonlarRepo)
    {
        $this->elonlarRepository = $elonlarRepo;
    }

    /**
     * Display a listing of the Elonlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       //$elonlars = $this->elonlarRepository->all();

       $elonlars = Elonlar::latest()->orderBy("created_at", 'desc')->paginate(12);
        

       return view('elonlars.index', compact('elonlars'))->with('i',(request()->input('page', 1) -1) *5);

    }

    /**
     * Show the form for creating a new Elonlar.
     *
     * @return Response
     */
    public function create()
    {
        return view('elonlars.create');
    }

    /**
     * Store a newly created Elonlar in storage.
     *
     * @param CreateElonlarRequest $request
     *
     * @return Response
     */
    public function store(CreateElonlarRequest $request)
    {
        $input = $request->all();

        $elonlar = $this->elonlarRepository->create($input);

        Flash::success('Elonlar saved successfully.');

        return redirect(route('elonlars.index'));
    }

    /**
     * Display the specified Elonlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $elonlar = $this->elonlarRepository->find($id);

        if (empty($elonlar)) {
            Flash::error('Elonlar not found');

            return redirect(route('elonlars.index'));
        }

        return view('elonlars.show')->with('elonlar', $elonlar);
    }

    /**
     * Show the form for editing the specified Elonlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $elonlar = $this->elonlarRepository->find($id);

        if (empty($elonlar)) {
            Flash::error('Elonlar not found');

            return redirect(route('elonlars.index'));
        }

        return view('elonlars.edit')->with('elonlar', $elonlar);
    }

    /**
     * Update the specified Elonlar in storage.
     *
     * @param int $id
     * @param UpdateElonlarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateElonlarRequest $request)
    {
        $elonlar = $this->elonlarRepository->find($id);

        if (empty($elonlar)) {
            Flash::error('Elonlar not found');

            return redirect(route('elonlars.index'));
        }

        $elonlar = $this->elonlarRepository->update($request->all(), $id);

        Flash::success('Elonlar updated successfully.');

        return redirect(route('elonlars.index'));
    }

    /**
     * Remove the specified Elonlar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $elonlar = $this->elonlarRepository->find($id);

        if (empty($elonlar)) {
            Flash::error('Elonlar not found');

            return redirect(route('elonlars.index'));
        }

        $this->elonlarRepository->delete($id);

        Flash::success('Elonlar deleted successfully.');

        return redirect(route('elonlars.index'));
    }
}
