<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTalabalarRequest;
use App\Http\Requests\UpdateTalabalarRequest;
use App\Repositories\TalabalarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Talabalar;

class TalabalarController extends AppBaseController
{
    /** @var  TalabalarRepository */
    private $talabalarRepository;

    public function __construct(TalabalarRepository $talabalarRepo)
    {
        $this->talabalarRepository = $talabalarRepo;
    }

    /**
     * Display a listing of the Talabalar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       /*  $talabalars = $this->talabalarRepository->all();

        return view('talabalars.index')
            ->with('talabalars', $talabalars); */

            $talabalars = Talabalar::latest()->orderBy("created_at", 'desc')->paginate(12);
        

            return view('talabalars.index', compact('talabalars'))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new Talabalar.
     *
     * @return Response
     */
    public function create()
    {
        return view('talabalars.create');
    }

    /**
     * Store a newly created Talabalar in storage.
     *
     * @param CreateTalabalarRequest $request
     *
     * @return Response
     */
    public function store(CreateTalabalarRequest $request)
    {
        $input = $request->all();

        $talabalar = $this->talabalarRepository->create($input);

        Flash::success('Talabalar saved successfully.');

        return redirect(route('talabalars.index'));
    }

    /**
     * Display the specified Talabalar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $talabalar = $this->talabalarRepository->find($id);

        if (empty($talabalar)) {
            Flash::error('Talabalar not found');

            return redirect(route('talabalars.index'));
        }

        return view('talabalars.show')->with('talabalar', $talabalar);
    }

    /**
     * Show the form for editing the specified Talabalar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $talabalar = $this->talabalarRepository->find($id);

        if (empty($talabalar)) {
            Flash::error('Talabalar not found');

            return redirect(route('talabalars.index'));
        }

        return view('talabalars.edit')->with('talabalar', $talabalar);
    }

    /**
     * Update the specified Talabalar in storage.
     *
     * @param int $id
     * @param UpdateTalabalarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTalabalarRequest $request)
    {
        $talabalar = $this->talabalarRepository->find($id);

        if (empty($talabalar)) {
            Flash::error('Talabalar not found');

            return redirect(route('talabalars.index'));
        }

        $talabalar = $this->talabalarRepository->update($request->all(), $id);

        Flash::success('Talabalar updated successfully.');

        return redirect(route('talabalars.index'));
    }

    /**
     * Remove the specified Talabalar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $talabalar = $this->talabalarRepository->find($id);

        if (empty($talabalar)) {
            Flash::error('Talabalar not found');

            return redirect(route('talabalars.index'));
        }

        $this->talabalarRepository->delete($id);

        Flash::success('Talabalar deleted successfully.');

        return redirect(route('talabalars.index'));
    }
}
