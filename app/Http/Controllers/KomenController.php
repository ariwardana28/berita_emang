<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKomenRequest;
use App\Http\Requests\UpdateKomenRequest;
use App\Repositories\KomenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class KomenController extends AppBaseController
{
    /** @var KomenRepository $komenRepository*/
    private $komenRepository;

    public function __construct(KomenRepository $komenRepo)
    {
        $this->komenRepository = $komenRepo;
    }

    /**
     * Display a listing of the Komen.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $komens = $this->komenRepository->all();

        return view('komens.index')
            ->with('komens', $komens);
    }

    /**
     * Show the form for creating a new Komen.
     *
     * @return Response
     */
    public function create()
    {
        return view('komens.create');
    }

    /**
     * Store a newly created Komen in storage.
     *
     * @param CreateKomenRequest $request
     *
     * @return Response
     */
    public function store(CreateKomenRequest $request)
    {
        $input = $request->all();

        $komen = $this->komenRepository->create($input);

        Flash::success('Komen saved successfully.');

        return redirect(route('kategori.show',$request->berita_id));
    }

    /**
     * Display the specified Komen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $komen = $this->komenRepository->find($id);

        if (empty($komen)) {
            Flash::error('Komen not found');

            return redirect(route('komens.index'));
        }

        return view('komens.show')->with('komen', $komen);
    }

    /**
     * Show the form for editing the specified Komen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $komen = $this->komenRepository->find($id);

        if (empty($komen)) {
            Flash::error('Komen not found');

            return redirect(route('komens.index'));
        }

        return view('komens.edit')->with('komen', $komen);
    }

    /**
     * Update the specified Komen in storage.
     *
     * @param int $id
     * @param UpdateKomenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKomenRequest $request)
    {
        $komen = $this->komenRepository->find($id);

        if (empty($komen)) {
            Flash::error('Komen not found');

            return redirect(route('komens.index'));
        }

        $komen = $this->komenRepository->update($request->all(), $id);

        Flash::success('Komen updated successfully.');

        return redirect(route('komens.index'));
    }

    /**
     * Remove the specified Komen from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $komen = $this->komenRepository->find($id);

        if (empty($komen)) {
            Flash::error('Komen not found');

            return redirect(route('komens.index'));
        }

        $this->komenRepository->delete($id);

        Flash::success('Komen deleted successfully.');

        return redirect(route('komens.index'));
    }
}
