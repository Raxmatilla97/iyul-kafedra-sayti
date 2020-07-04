<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGridCardRequest;
use App\Http\Requests\UpdateGridCardRequest;
use App\Repositories\GridCardRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GridCardController extends AppBaseController
{
    /** @var  GridCardRepository */
    private $gridCardRepository;

    public function __construct(GridCardRepository $gridCardRepo)
    {
        $this->gridCardRepository = $gridCardRepo;
    }

    /**
     * Display a listing of the GridCard.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gridCards = $this->gridCardRepository->all();

        return view('grid_cards.index')
            ->with('gridCards', $gridCards);
    }

    /**
     * Show the form for creating a new GridCard.
     *
     * @return Response
     */
    public function create()
    {
        return view('grid_cards.create');
    }

    /**
     * Store a newly created GridCard in storage.
     *
     * @param CreateGridCardRequest $request
     *
     * @return Response
     */
    public function store(CreateGridCardRequest $request)
    {
        $input = $request->all();

        $gridCard = $this->gridCardRepository->create($input);

        Flash::success('Grid Card saved successfully.');

        return redirect(route('gridCards.index'));
    }

    /**
     * Display the specified GridCard.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gridCard = $this->gridCardRepository->find($id);

        if (empty($gridCard)) {
            Flash::error('Grid Card not found');

            return redirect(route('gridCards.index'));
        }

        return view('grid_cards.show')->with('gridCard', $gridCard);
    }

    /**
     * Show the form for editing the specified GridCard.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gridCard = $this->gridCardRepository->find($id);

        if (empty($gridCard)) {
            Flash::error('Grid Card not found');

            return redirect(route('gridCards.index'));
        }

        return view('grid_cards.edit')->with('gridCard', $gridCard);
    }

    /**
     * Update the specified GridCard in storage.
     *
     * @param int $id
     * @param UpdateGridCardRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGridCardRequest $request)
    {
        $gridCard = $this->gridCardRepository->find($id);

        if (empty($gridCard)) {
            Flash::error('Grid Card not found');

            return redirect(route('gridCards.index'));
        }

        $gridCard = $this->gridCardRepository->update($request->all(), $id);

        Flash::success('Grid Card updated successfully.');

        return redirect(route('gridCards.index'));
    }

    /**
     * Remove the specified GridCard from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gridCard = $this->gridCardRepository->find($id);

        if (empty($gridCard)) {
            Flash::error('Grid Card not found');

            return redirect(route('gridCards.index'));
        }

        $this->gridCardRepository->delete($id);

        Flash::success('Grid Card deleted successfully.');

        return redirect(route('gridCards.index'));
    }
}
