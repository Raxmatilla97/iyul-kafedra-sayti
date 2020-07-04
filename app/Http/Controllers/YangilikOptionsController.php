<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateYangilikOptionsRequest;
use App\Http\Requests\UpdateYangilikOptionsRequest;
use App\Repositories\YangilikOptionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class YangilikOptionsController extends AppBaseController
{
    /** @var  YangilikOptionsRepository */
    private $yangilikOptionsRepository;

    public function __construct(YangilikOptionsRepository $yangilikOptionsRepo)
    {
        $this->yangilikOptionsRepository = $yangilikOptionsRepo;
    }

    /**
     * Display a listing of the YangilikOptions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $yangilikOptions = $this->yangilikOptionsRepository->all();

        return view('yangilik_options.index')
            ->with('yangilikOptions', $yangilikOptions);
    }

    /**
     * Show the form for creating a new YangilikOptions.
     *
     * @return Response
     */
    public function create()
    {
        return view('yangilik_options.create');
    }

    /**
     * Store a newly created YangilikOptions in storage.
     *
     * @param CreateYangilikOptionsRequest $request
     *
     * @return Response
     */
    public function store(CreateYangilikOptionsRequest $request)
    {
        $input = $request->all();

        $yangilikOptions = $this->yangilikOptionsRepository->create($input);

        Flash::success('Yangilik Options saved successfully.');

        return redirect(route('yangilikOptions.index'));
    }

    /**
     * Display the specified YangilikOptions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $yangilikOptions = $this->yangilikOptionsRepository->find($id);

        if (empty($yangilikOptions)) {
            Flash::error('Yangilik Options not found');

            return redirect(route('yangilikOptions.index'));
        }

        return view('yangilik_options.show')->with('yangilikOptions', $yangilikOptions);
    }

    /**
     * Show the form for editing the specified YangilikOptions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $yangilikOptions = $this->yangilikOptionsRepository->find($id);

        if (empty($yangilikOptions)) {
            Flash::error('Yangilik Options not found');

            return redirect(route('yangilikOptions.index'));
        }

        return view('yangilik_options.edit')->with('yangilikOptions', $yangilikOptions);
    }

    /**
     * Update the specified YangilikOptions in storage.
     *
     * @param int $id
     * @param UpdateYangilikOptionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateYangilikOptionsRequest $request)
    {
        $yangilikOptions = $this->yangilikOptionsRepository->find($id);

        if (empty($yangilikOptions)) {
            Flash::error('Yangilik Options not found');

            return redirect(route('yangilikOptions.index'));
        }

        $yangilikOptions = $this->yangilikOptionsRepository->update($request->all(), $id);

        Flash::success('Yangilik Options updated successfully.');

        return redirect(route('yangilikOptions.index'));
    }

    /**
     * Remove the specified YangilikOptions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $yangilikOptions = $this->yangilikOptionsRepository->find($id);

        if (empty($yangilikOptions)) {
            Flash::error('Yangilik Options not found');

            return redirect(route('yangilikOptions.index'));
        }

        $this->yangilikOptionsRepository->delete($id);

        Flash::success('Yangilik Options deleted successfully.');

        return redirect(route('yangilikOptions.index'));
    }
}
