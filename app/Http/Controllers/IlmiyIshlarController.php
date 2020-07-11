<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIlmiyIshlarRequest;
use App\Http\Requests\UpdateIlmiyIshlarRequest;
use App\Repositories\IlmiyIshlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\IlmiyIshlar;
class IlmiyIshlarController extends AppBaseController
{
    /** @var  IlmiyIshlarRepository */
    private $ilmiyIshlarRepository;

    public function __construct(IlmiyIshlarRepository $ilmiyIshlarRepo)
    {
        $this->ilmiyIshlarRepository = $ilmiyIshlarRepo;
    }

    /**
     * Display a listing of the IlmiyIshlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
      /*   $ilmiyIshlars = $this->ilmiyIshlarRepository->all();

        return view('ilmiy_ishlars.index')
            ->with('ilmiyIshlars', $ilmiyIshlars); */

            $ilmiyIshlars = IlmiyIshlar::latest()->orderBy("created_at", 'desc')->paginate(12);
        

        return view('ilmiy_ishlars.index', compact('ilmiyIshlars'))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new IlmiyIshlar.
     *
     * @return Response
     */
    public function create()
    {
        return view('ilmiy_ishlars.create');
    }

    /**
     * Store a newly created IlmiyIshlar in storage.
     *
     * @param CreateIlmiyIshlarRequest $request
     *
     * @return Response
     */
    public function store(CreateIlmiyIshlarRequest $request)
    {
        $input = $request->all();

        $ilmiyIshlar = $this->ilmiyIshlarRepository->create($input);

        Flash::success('Ilmiy Ishlar saved successfully.');

        return redirect(route('ilmiyIshlars.index'));
    }

    /**
     * Display the specified IlmiyIshlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ilmiyIshlar = $this->ilmiyIshlarRepository->find($id);

        if (empty($ilmiyIshlar)) {
            Flash::error('Ilmiy Ishlar not found');

            return redirect(route('ilmiyIshlars.index'));
        }

        return view('ilmiy_ishlars.show')->with('ilmiyIshlar', $ilmiyIshlar);
    }

    /**
     * Show the form for editing the specified IlmiyIshlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ilmiyIshlar = $this->ilmiyIshlarRepository->find($id);

        if (empty($ilmiyIshlar)) {
            Flash::error('Ilmiy Ishlar not found');

            return redirect(route('ilmiyIshlars.index'));
        }

        return view('ilmiy_ishlars.edit')->with('ilmiyIshlar', $ilmiyIshlar);
    }

    /**
     * Update the specified IlmiyIshlar in storage.
     *
     * @param int $id
     * @param UpdateIlmiyIshlarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIlmiyIshlarRequest $request)
    {
        $ilmiyIshlar = $this->ilmiyIshlarRepository->find($id);

        if (empty($ilmiyIshlar)) {
            Flash::error('Ilmiy Ishlar not found');

            return redirect(route('ilmiyIshlars.index'));
        }

        $ilmiyIshlar = $this->ilmiyIshlarRepository->update($request->all(), $id);

        Flash::success('Ilmiy Ishlar updated successfully.');

        return redirect(route('ilmiyIshlars.index'));
    }

    /**
     * Remove the specified IlmiyIshlar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ilmiyIshlar = $this->ilmiyIshlarRepository->find($id);

        if (empty($ilmiyIshlar)) {
            Flash::error('Ilmiy Ishlar not found');

            return redirect(route('ilmiyIshlars.index'));
        }

        $this->ilmiyIshlarRepository->delete($id);

        Flash::success('Ilmiy Ishlar deleted successfully.');

        return redirect(route('ilmiyIshlars.index'));
    }
}
