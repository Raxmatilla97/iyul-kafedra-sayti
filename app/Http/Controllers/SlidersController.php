<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlidersRequest;
use App\Http\Requests\UpdateSlidersRequest;
use App\Repositories\SlidersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SlidersController extends AppBaseController
{
    /** @var  SlidersRepository */
    private $slidersRepository;

    public function __construct(SlidersRepository $slidersRepo)
    {
        $this->slidersRepository = $slidersRepo;
    }

    /**
     * Display a listing of the Sliders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sliders = $this->slidersRepository->all();

        return view('sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new Sliders.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created Sliders in storage.
     *
     * @param CreateSlidersRequest $request
     *
     * @return Response
     */
    public function store(CreateSlidersRequest $request)
    {
        $input = $request->all();

        $sliders = $this->slidersRepository->create($input);

        Flash::success('Sliders saved successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified Sliders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sliders = $this->slidersRepository->find($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.show')->with('sliders', $sliders);
    }

    /**
     * Show the form for editing the specified Sliders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sliders = $this->slidersRepository->find($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.edit')->with('sliders', $sliders);
    }

    /**
     * Update the specified Sliders in storage.
     *
     * @param int $id
     * @param UpdateSlidersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlidersRequest $request)
    {
        $sliders = $this->slidersRepository->find($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        $sliders = $this->slidersRepository->update($request->all(), $id);

        Flash::success('Sliders updated successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified Sliders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sliders = $this->slidersRepository->find($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        $this->slidersRepository->delete($id);

        Flash::success('Sliders deleted successfully.');

        return redirect(route('sliders.index'));
    }
}
