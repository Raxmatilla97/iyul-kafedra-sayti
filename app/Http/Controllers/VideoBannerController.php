<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoBannerRequest;
use App\Http\Requests\UpdateVideoBannerRequest;
use App\Repositories\VideoBannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VideoBannerController extends AppBaseController
{
    /** @var  VideoBannerRepository */
    private $videoBannerRepository;

    public function __construct(VideoBannerRepository $videoBannerRepo)
    {
        $this->videoBannerRepository = $videoBannerRepo;
    }

    /**
     * Display a listing of the VideoBanner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $videoBanners = $this->videoBannerRepository->all();

        return view('video_banners.index')
            ->with('videoBanners', $videoBanners);
    }

    /**
     * Show the form for creating a new VideoBanner.
     *
     * @return Response
     */
    public function create()
    {
        return view('video_banners.create');
    }

    /**
     * Store a newly created VideoBanner in storage.
     *
     * @param CreateVideoBannerRequest $request
     *
     * @return Response
     */
    public function store(CreateVideoBannerRequest $request)
    {
        $input = $request->all();

        $videoBanner = $this->videoBannerRepository->create($input);

        Flash::success('Video Banner saved successfully.');

        return redirect(route('videoBanners.index'));
    }

    /**
     * Display the specified VideoBanner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $videoBanner = $this->videoBannerRepository->find($id);

        if (empty($videoBanner)) {
            Flash::error('Video Banner not found');

            return redirect(route('videoBanners.index'));
        }

        return view('video_banners.show')->with('videoBanner', $videoBanner);
    }

    /**
     * Show the form for editing the specified VideoBanner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $videoBanner = $this->videoBannerRepository->find($id);

        if (empty($videoBanner)) {
            Flash::error('Video Banner not found');

            return redirect(route('videoBanners.index'));
        }

        $image = $videoBanner->image;

        return view('video_banners.edit', compact('image'))->with('videoBanner', $videoBanner, );
    }

    /**
     * Update the specified VideoBanner in storage.
     *
     * @param int $id
     * @param UpdateVideoBannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideoBannerRequest $request)
    {
        $videoBanner = $this->videoBannerRepository->find($id);

        if (empty($videoBanner)) {
            Flash::error('Video Banner not found');

            return redirect(route('videoBanners.index'));
        }

        $videoBanner = $this->videoBannerRepository->update($request->all(), $id);

        Flash::success('Video Banner updated successfully.');

        return redirect(route('videoBanners.index'));
    }

    /**
     * Remove the specified VideoBanner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $videoBanner = $this->videoBannerRepository->find($id);

        if (empty($videoBanner)) {
            Flash::error('Video Banner not found');

            return redirect(route('videoBanners.index'));
        }

        $this->videoBannerRepository->delete($id);

        Flash::success('Video Banner deleted successfully.');

        return redirect(route('videoBanners.index'));
    }
}
