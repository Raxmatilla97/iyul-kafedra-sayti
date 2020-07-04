<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateYangiliklarRequest;
use App\Http\Requests\UpdateYangiliklarRequest;
use App\Repositories\YangiliklarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Yangiliklar;
use App\Models\YangiliklarBolimlari;

class YangiliklarController extends AppBaseController
{
    /** @var  YangiliklarRepository */
    private $yangiliklarRepository;

    public function __construct(YangiliklarRepository $yangiliklarRepo)
    {
        $this->yangiliklarRepository = $yangiliklarRepo;
    }

    /**
     * Display a listing of the Yangiliklar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       
       /* ||||||||||||||||||||||||||||||||||||||||||||||||||||||
       |    
       |    Yangiliklarni ro'yxatida paginatsion bo'lim ochildi
       */ 
         $yangiliklars = Yangiliklar::latest()->orderBy("created_at", 'desc')->paginate(12);
        

        return view('yangiliklars.index', compact('yangiliklars'))->with('i',(request()->input('page', 1) -1) *5);

    }

    /**
     * Show the form for creating a new Yangiliklar.
     *
     * @return Response
     */
    public function create()
    {

        $category = YangiliklarBolimlari::pluck('title', 'id');;
        return view('yangiliklars.create', compact('category'));
    }

    /**
     * Store a newly created Yangiliklar in storage.
     *
     * @param CreateYangiliklarRequest $request
     *
     * @return Response
     */
    public function store(CreateYangiliklarRequest $request)
    {
        $input = $request->all();

        $yangiliklar = $this->yangiliklarRepository->create($input);

        Flash::success('Yangiliklar saved successfully.');

        return redirect(route('yangiliklars.index'));
    }

    /**
     * Display the specified Yangiliklar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $yangiliklar = $this->yangiliklarRepository->find($id);

        if (empty($yangiliklar)) {
            Flash::error('Yangiliklar not found');

            return redirect(route('yangiliklars.index'));
        }

        return view('yangiliklars.show')->with('yangiliklar', $yangiliklar);
    }

    /**
     * Show the form for editing the specified Yangiliklar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $yangiliklar = $this->yangiliklarRepository->find($id);

        $category = YangiliklarBolimlari::pluck('title', 'id');;
       
        if (empty($yangiliklar)) {
            Flash::error('Yangilik topilmadi');

            return redirect(route('yangiliklars.index'));
        }
        $image = $yangiliklar->image;

        return view('yangiliklars.edit', compact('category', 'image'))->with('yangiliklar', $yangiliklar);
    }

    /**
     * Update the specified Yangiliklar in storage.
     *
     * @param int $id
     * @param UpdateYangiliklarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateYangiliklarRequest $request)
    {
        $yangiliklar = $this->yangiliklarRepository->find($id);

        if (empty($yangiliklar)) {
            Flash::error('Yangiliklar not found');

            return redirect(route('yangiliklars.index'));
        }

        $yangiliklar = $this->yangiliklarRepository->update($request->all(), $id);

        Flash::success('Yangiliklar updated successfully.');

        return redirect(route('yangiliklars.index'));
    }

    /**
     * Remove the specified Yangiliklar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $yangiliklar = $this->yangiliklarRepository->find($id);

        if (empty($yangiliklar)) {
            Flash::error('Yangiliklar not found');

            return redirect(route('yangiliklars.index'));
        }

        $this->yangiliklarRepository->delete($id);

        Flash::success('Yangiliklar deleted successfully.');

        return redirect(route('yangiliklars.index'));
    }
}
