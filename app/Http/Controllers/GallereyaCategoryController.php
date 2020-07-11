<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGallereyaCategoryRequest;
use App\Http\Requests\UpdateGallereyaCategoryRequest;
use App\Repositories\GallereyaCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GallereyaCategoryController extends AppBaseController
{
    /** @var  GallereyaCategoryRepository */
    private $gallereyaCategoryRepository;

    public function __construct(GallereyaCategoryRepository $gallereyaCategoryRepo)
    {
        $this->gallereyaCategoryRepository = $gallereyaCategoryRepo;
    }

    /**
     * Display a listing of the GallereyaCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gallereyaCategories = $this->gallereyaCategoryRepository->all();

        return view('gallereya_categories.index')
            ->with('gallereyaCategories', $gallereyaCategories);
    }

    /**
     * Show the form for creating a new GallereyaCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallereya_categories.create');
    }

    /**
     * Store a newly created GallereyaCategory in storage.
     *
     * @param CreateGallereyaCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateGallereyaCategoryRequest $request)
    {
        $input = $request->all();

        $gallereyaCategory = $this->gallereyaCategoryRepository->create($input);

        Flash::success('Yangi kiritilgan gallereya bazaga saqlandi.');

        return redirect(route('gallereyaCategories.index'));
    }

    /**
     * Display the specified GallereyaCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallereyaCategory = $this->gallereyaCategoryRepository->find($id);

        if (empty($gallereyaCategory)) {
            Flash::error('Gallereya topilmadi');

            return redirect(route('gallereyaCategories.index'));
        }

        return view('gallereya_categories.show')->with('gallereyaCategory', $gallereyaCategory);
    }

    /**
     * Show the form for editing the specified GallereyaCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallereyaCategory = $this->gallereyaCategoryRepository->find($id);

        if (empty($gallereyaCategory)) {
            Flash::error('Gallereya topilmadi');

            return redirect(route('gallereyaCategories.index'));
        }

        return view('gallereya_categories.edit')->with('gallereyaCategory', $gallereyaCategory);
    }

    /**
     * Update the specified GallereyaCategory in storage.
     *
     * @param int $id
     * @param UpdateGallereyaCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGallereyaCategoryRequest $request)
    {
        $gallereyaCategory = $this->gallereyaCategoryRepository->find($id);

        if (empty($gallereyaCategory)) {
            Flash::error('Gallereya topilmadi');

            return redirect(route('gallereyaCategories.index'));
        }

        $gallereyaCategory = $this->gallereyaCategoryRepository->update($request->all(), $id);

        Flash::success('Gallereya tahrirlandi va bazaga saqlandi.');

        return redirect(route('gallereyaCategories.index'));
    }

    /**
     * Remove the specified GallereyaCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallereyaCategory = $this->gallereyaCategoryRepository->find($id);

        if (empty($gallereyaCategory)) {
            Flash::error('Gallereya topilmadi');

            return redirect(route('gallereyaCategories.index'));
        }

        $this->gallereyaCategoryRepository->delete($id);

        Flash::success("Belgilangan Gallereya o'chirildi.");

        return redirect(route('gallereyaCategories.index'));
    }
}
