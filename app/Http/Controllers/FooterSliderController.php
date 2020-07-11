<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFooterSliderRequest;
use App\Http\Requests\UpdateFooterSliderRequest;
use App\Repositories\FooterSliderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FooterSliderController extends AppBaseController
{
    /** @var  FooterSliderRepository */
    private $footerSliderRepository;

    public function __construct(FooterSliderRepository $footerSliderRepo)
    {
        $this->footerSliderRepository = $footerSliderRepo;
    }

    /**
     * Display a listing of the FooterSlider.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $footerSliders = $this->footerSliderRepository->all();

        return view('footer_sliders.index')
            ->with('footerSliders', $footerSliders);
    }

    /**
     * Show the form for creating a new FooterSlider.
     *
     * @return Response
     */
    public function create()
    {
        return view('footer_sliders.create');
    }

    /**
     * Store a newly created FooterSlider in storage.
     *
     * @param CreateFooterSliderRequest $request
     *
     * @return Response
     */
    public function store(CreateFooterSliderRequest $request)
    {
        $input = $request->all();

        $footerSlider = $this->footerSliderRepository->create($input);

        Flash::success('Pastki slayd saqlandi.');

        return redirect(route('footerSliders.index'));
    }

    /**
     * Display the specified FooterSlider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $footerSlider = $this->footerSliderRepository->find($id);

        if (empty($footerSlider)) {
            Flash::error('Slayd topilmadi');

            return redirect(route('footerSliders.index'));
        }

        return view('footer_sliders.show')->with('footerSlider', $footerSlider);
    }

    /**
     * Show the form for editing the specified FooterSlider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $footerSlider = $this->footerSliderRepository->find($id);

        if (empty($footerSlider)) {
            Flash::error("Slayd topilmadi");

            return redirect(route('footerSliders.index'));
        }

        return view('footer_sliders.edit')->with('footerSlider', $footerSlider);
    }

    /**
     * Update the specified FooterSlider in storage.
     *
     * @param int $id
     * @param UpdateFooterSliderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFooterSliderRequest $request)
    {
        $footerSlider = $this->footerSliderRepository->find($id);

        if (empty($footerSlider)) {
            Flash::error('Slayd topilmadi');

            return redirect(route('footerSliders.index'));
        }

        $footerSlider = $this->footerSliderRepository->update($request->all(), $id);

        Flash::success("Tahrirlangan pastki slayd o'zgartirildi.");

        return redirect(route('footerSliders.index'));
    }

    /**
     * Remove the specified FooterSlider from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $footerSlider = $this->footerSliderRepository->find($id);

        if (empty($footerSlider)) {
            Flash::error('Slayd topilmadi');

            return redirect(route('footerSliders.index'));
        }

        $this->footerSliderRepository->delete($id);

        Flash::success("Pastki slayd o'chirildi!");

        return redirect(route('footerSliders.index'));
    }
}
