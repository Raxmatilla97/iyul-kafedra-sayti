<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCounterSettingRequest;
use App\Http\Requests\UpdateCounterSettingRequest;
use App\Repositories\CounterSettingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CounterSettingController extends AppBaseController
{
    /** @var  CounterSettingRepository */
    private $counterSettingRepository;

    public function __construct(CounterSettingRepository $counterSettingRepo)
    {
        $this->counterSettingRepository = $counterSettingRepo;
    }

    /**
     * Display a listing of the CounterSetting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $counterSettings = $this->counterSettingRepository->all();

        return view('counter_settings.index')
            ->with('counterSettings', $counterSettings);
    }

    /**
     * Show the form for creating a new CounterSetting.
     *
     * @return Response
     */
    public function create()
    {
        return view('counter_settings.create');
    }

    /**
     * Store a newly created CounterSetting in storage.
     *
     * @param CreateCounterSettingRequest $request
     *
     * @return Response
     */
    public function store(CreateCounterSettingRequest $request)
    {
        $input = $request->all();

        $counterSetting = $this->counterSettingRepository->create($input);

        Flash::success("Kiritilgan ma'lumotlar bazaga joylandi.");

        return redirect(route('counterSettings.index'));
    }

    /**
     * Display the specified CounterSetting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $counterSetting = $this->counterSettingRepository->find($id);

        if (empty($counterSetting)) {
            Flash::error("Ma'lumot topilmadi");

            return redirect(route('counterSettings.index'));
        }

        return view('counter_settings.show')->with('counterSetting', $counterSetting);
    }

    /**
     * Show the form for editing the specified CounterSetting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $counterSetting = $this->counterSettingRepository->find($id);

        if (empty($counterSetting)) {
            Flash::error("Ma'lumot topilmadi");

            return redirect(route('counterSettings.index'));
        }

        return view('counter_settings.edit')->with('counterSetting', $counterSetting);
    }

    /**
     * Update the specified CounterSetting in storage.
     *
     * @param int $id
     * @param UpdateCounterSettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCounterSettingRequest $request)
    {
        $counterSetting = $this->counterSettingRepository->find($id);

        if (empty($counterSetting)) {
            Flash::error('Counter Setting not found');

            return redirect(route('counterSettings.index'));
        }

        $counterSetting = $this->counterSettingRepository->update($request->all(), $id);

        Flash::success("Tahrirlangan ma'lumot o'zgartirilib qayta saqlandi.");

        return redirect(route('counterSettings.index'));
    }

    /**
     * Remove the specified CounterSetting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $counterSetting = $this->counterSettingRepository->find($id);

        if (empty($counterSetting)) {
            Flash::error("Ma'lumot topilmadi.");

            return redirect(route('counterSettings.index'));
        }

        $this->counterSettingRepository->delete($id);

        Flash::success("Ma'lumot o'chirildi. Agar ma'lumotni qaytarmoqchi bo'lsangiz Muxandis dasturchiga murojat qiling.");

        return redirect(route('counterSettings.index'));
    }
}
