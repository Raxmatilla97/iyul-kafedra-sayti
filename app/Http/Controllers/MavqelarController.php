<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMavqelarRequest;
use App\Http\Requests\UpdateMavqelarRequest;
use App\Repositories\MavqelarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MavqelarController extends AppBaseController
{
    /** @var  MavqelarRepository */
    private $mavqelarRepository;

    public function __construct(MavqelarRepository $mavqelarRepo)
    {
        $this->mavqelarRepository = $mavqelarRepo;
    }

    /**
     * Display a listing of the Mavqelar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mavqelars = $this->mavqelarRepository->all();

        return view('mavqelars.index')
            ->with('mavqelars', $mavqelars);
    }

    /**
     * Show the form for creating a new Mavqelar.
     *
     * @return Response
     */
    public function create()
    {
        return view('mavqelars.create');
    }

    /**
     * Store a newly created Mavqelar in storage.
     *
     * @param CreateMavqelarRequest $request
     *
     * @return Response
     */
    public function store(CreateMavqelarRequest $request)
    {
        $input = $request->all();

        $mavqelar = $this->mavqelarRepository->create($input);

        Flash::success('Mavqelar saved successfully.');

        return redirect(route('mavqelars.index'));
    }

    /**
     * Display the specified Mavqelar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mavqelar = $this->mavqelarRepository->find($id);

        if (empty($mavqelar)) {
            Flash::error('Mavqelar not found');

            return redirect(route('mavqelars.index'));
        }

        return view('mavqelars.show')->with('mavqelar', $mavqelar);
    }

    /**
     * Show the form for editing the specified Mavqelar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mavqelar = $this->mavqelarRepository->find($id);

        if (empty($mavqelar)) {
            Flash::error('Mavqelar not found');

            return redirect(route('mavqelars.index'));
        }

        return view('mavqelars.edit')->with('mavqelar', $mavqelar);
    }

    /**
     * Update the specified Mavqelar in storage.
     *
     * @param int $id
     * @param UpdateMavqelarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMavqelarRequest $request)
    {
        $mavqelar = $this->mavqelarRepository->find($id);

        if (empty($mavqelar)) {
            Flash::error('Mavqelar not found');

            return redirect(route('mavqelars.index'));
        }

        $mavqelar = $this->mavqelarRepository->update($request->all(), $id);

        Flash::success('Mavqelar updated successfully.');

        return redirect(route('mavqelars.index'));
    }

    /**
     * Remove the specified Mavqelar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mavqelar = $this->mavqelarRepository->find($id);

        if (empty($mavqelar)) {
            Flash::error('Mavqelar not found');

            return redirect(route('mavqelars.index'));
        }

        $this->mavqelarRepository->delete($id);

        Flash::success('Mavqelar deleted successfully.');

        return redirect(route('mavqelars.index'));
    }
}
