<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFirstbannerRequest;
use App\Http\Requests\UpdateFirstbannerRequest;
use App\Repositories\FirstbannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FirstbannerController extends AppBaseController
{
    /** @var  FirstbannerRepository */
    private $firstbannerRepository;

    public function __construct(FirstbannerRepository $firstbannerRepo)
    {
        $this->firstbannerRepository = $firstbannerRepo;
    }

    /**
     * Display a listing of the Firstbanner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $firstbanners = $this->firstbannerRepository->all();

        return view('firstbanners.index')
            ->with('firstbanners', $firstbanners);
    }

    /**
     * Show the form for creating a new Firstbanner.
     *
     * @return Response
     */
    public function create()
    {
        return view('firstbanners.create');
    }

    /**
     * Store a newly created Firstbanner in storage.
     *
     * @param CreateFirstbannerRequest $request
     *
     * @return Response
     */
    public function store(CreateFirstbannerRequest $request)
    {
        $input = $request->all();

        $firstbanner = $this->firstbannerRepository->create($input);

        Flash::success('Yangi banner saqlandi.');

        return redirect(route('firstbanners.index'));
    }

    /**
     * Display the specified Firstbanner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $firstbanner = $this->firstbannerRepository->find($id);

        if (empty($firstbanner)) {
            Flash::error('Banner topilmadi');

            return redirect(route('firstbanners.index'));
        }

        return view('firstbanners.show')->with('firstbanner', $firstbanner);
    }

    /**
     * Show the form for editing the specified Firstbanner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $firstbanner = $this->firstbannerRepository->find($id);

        if (empty($firstbanner)) {
            Flash::error('Banner topilmadi');

            return redirect(route('firstbanners.index'));
        }

        return view('firstbanners.edit')->with('firstbanner', $firstbanner);
    }

    /**
     * Update the specified Firstbanner in storage.
     *
     * @param int $id
     * @param UpdateFirstbannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFirstbannerRequest $request)
    {
        $firstbanner = $this->firstbannerRepository->find($id);

        if (empty($firstbanner)) {
            Flash::error('Banner topilmadi');

            return redirect(route('firstbanners.index'));
        }

        $firstbanner = $this->firstbannerRepository->update($request->all(), $id);

        Flash::success("Banner tahrirlandi va bazaga saqlandi.");

        return redirect(route('firstbanners.index'));
    }

    /**
     * Remove the specified Firstbanner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $firstbanner = $this->firstbannerRepository->find($id);

        if (empty($firstbanner)) {
            Flash::error('Banner topilmadi');

            return redirect(route('firstbanners.index'));
        }

        $this->firstbannerRepository->delete($id);

        Flash::success("Banner o'chirildi.");

        return redirect(route('firstbanners.index'));
    }
}
