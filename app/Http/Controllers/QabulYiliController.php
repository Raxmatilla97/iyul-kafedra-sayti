<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQabulYiliRequest;
use App\Http\Requests\UpdateQabulYiliRequest;
use App\Repositories\QabulYiliRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class QabulYiliController extends AppBaseController
{
    /** @var  QabulYiliRepository */
    private $qabulYiliRepository;

    public function __construct(QabulYiliRepository $qabulYiliRepo)
    {
        $this->qabulYiliRepository = $qabulYiliRepo;
    }

    /**
     * Display a listing of the QabulYili.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $qabulYilis = $this->qabulYiliRepository->all();

        return view('qabul_yilis.index')
            ->with('qabulYilis', $qabulYilis);
    }

    /**
     * Show the form for creating a new QabulYili.
     *
     * @return Response
     */
    public function create()
    {
        return view('qabul_yilis.create');
    }

    /**
     * Store a newly created QabulYili in storage.
     *
     * @param CreateQabulYiliRequest $request
     *
     * @return Response
     */
    public function store(CreateQabulYiliRequest $request)
    {
        $input = $request->all();

        $qabulYili = $this->qabulYiliRepository->create($input);

        Flash::success('Qabul Yili saved successfully.');

        return redirect(route('qabulYilis.index'));
    }

    /**
     * Display the specified QabulYili.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $qabulYili = $this->qabulYiliRepository->find($id);

        if (empty($qabulYili)) {
            Flash::error('Qabul Yili not found');

            return redirect(route('qabulYilis.index'));
        }

        return view('qabul_yilis.show')->with('qabulYili', $qabulYili);
    }

    /**
     * Show the form for editing the specified QabulYili.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $qabulYili = $this->qabulYiliRepository->find($id);

        if (empty($qabulYili)) {
            Flash::error('Qabul Yili not found');

            return redirect(route('qabulYilis.index'));
        }

        return view('qabul_yilis.edit')->with('qabulYili', $qabulYili);
    }

    /**
     * Update the specified QabulYili in storage.
     *
     * @param int $id
     * @param UpdateQabulYiliRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQabulYiliRequest $request)
    {
        $qabulYili = $this->qabulYiliRepository->find($id);

        if (empty($qabulYili)) {
            Flash::error('Qabul Yili not found');

            return redirect(route('qabulYilis.index'));
        }

        $qabulYili = $this->qabulYiliRepository->update($request->all(), $id);

        Flash::success('Qabul Yili updated successfully.');

        return redirect(route('qabulYilis.index'));
    }

    /**
     * Remove the specified QabulYili from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $qabulYili = $this->qabulYiliRepository->find($id);

        if (empty($qabulYili)) {
            Flash::error('Qabul Yili not found');

            return redirect(route('qabulYilis.index'));
        }

        $this->qabulYiliRepository->delete($id);

        Flash::success('Qabul Yili deleted successfully.');

        return redirect(route('qabulYilis.index'));
    }
}
