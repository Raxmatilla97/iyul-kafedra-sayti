<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIlmiyMaqolalarRequest;
use App\Http\Requests\UpdateIlmiyMaqolalarRequest;
use App\Repositories\IlmiyMaqolalarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\IlmiyMaqolalar;
class IlmiyMaqolalarController extends AppBaseController
{
    /** @var  IlmiyMaqolalarRepository */
    private $ilmiyMaqolalarRepository;

    public function __construct(IlmiyMaqolalarRepository $ilmiyMaqolalarRepo)
    {
        $this->ilmiyMaqolalarRepository = $ilmiyMaqolalarRepo;
    }

    /**
     * Display a listing of the IlmiyMaqolalar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /* $ilmiyMaqolalars = $this->ilmiyMaqolalarRepository->all();

        return view('ilmiy_maqolalars.index')
            ->with('ilmiyMaqolalars', $ilmiyMaqolalars); */

            $ilmiyMaqolalars = IlmiyMaqolalar::latest()->orderBy("created_at", 'desc')->paginate(10);
        

            return view('ilmiy_maqolalars.index', compact('ilmiyMaqolalars'))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new IlmiyMaqolalar.
     *
     * @return Response
     */
    public function create()
    {
        return view('ilmiy_maqolalars.create');
    }

    /**
     * Store a newly created IlmiyMaqolalar in storage.
     *
     * @param CreateIlmiyMaqolalarRequest $request
     *
     * @return Response
     */
    public function store(CreateIlmiyMaqolalarRequest $request)
    {
        $input = $request->all();

        $ilmiyMaqolalar = $this->ilmiyMaqolalarRepository->create($input);

        Flash::success('Ilmiy Maqolalar saved successfully.');

        return redirect(route('ilmiyMaqolalars.index'));
    }

    /**
     * Display the specified IlmiyMaqolalar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ilmiyMaqolalar = $this->ilmiyMaqolalarRepository->find($id);

        if (empty($ilmiyMaqolalar)) {
            Flash::error('Ilmiy Maqolalar not found');

            return redirect(route('ilmiyMaqolalars.index'));
        }

        return view('ilmiy_maqolalars.show')->with('ilmiyMaqolalar', $ilmiyMaqolalar);
    }

    /**
     * Show the form for editing the specified IlmiyMaqolalar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ilmiyMaqolalar = $this->ilmiyMaqolalarRepository->find($id);

        if (empty($ilmiyMaqolalar)) {
            Flash::error('Ilmiy Maqolalar not found');

            return redirect(route('ilmiyMaqolalars.index'));
        }

        return view('ilmiy_maqolalars.edit')->with('ilmiyMaqolalar', $ilmiyMaqolalar);
    }

    /**
     * Update the specified IlmiyMaqolalar in storage.
     *
     * @param int $id
     * @param UpdateIlmiyMaqolalarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIlmiyMaqolalarRequest $request)
    {
        $ilmiyMaqolalar = $this->ilmiyMaqolalarRepository->find($id);

        if (empty($ilmiyMaqolalar)) {
            Flash::error('Ilmiy Maqolalar not found');

            return redirect(route('ilmiyMaqolalars.index'));
        }

        $ilmiyMaqolalar = $this->ilmiyMaqolalarRepository->update($request->all(), $id);

        Flash::success('Ilmiy Maqolalar updated successfully.');

        return redirect(route('ilmiyMaqolalars.index'));
    }

    /**
     * Remove the specified IlmiyMaqolalar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ilmiyMaqolalar = $this->ilmiyMaqolalarRepository->find($id);

        if (empty($ilmiyMaqolalar)) {
            Flash::error('Ilmiy Maqolalar not found');

            return redirect(route('ilmiyMaqolalars.index'));
        }

        $this->ilmiyMaqolalarRepository->delete($id);

        Flash::success('Ilmiy Maqolalar deleted successfully.');

        return redirect(route('ilmiyMaqolalars.index'));
    }
}
