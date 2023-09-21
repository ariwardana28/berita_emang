<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKomenDaerahRequest;
use App\Http\Requests\UpdateKomenDaerahRequest;
use App\Repositories\KomenDaerahRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class KomenDaerahController extends AppBaseController
{
    /** @var KomenDaerahRepository $komenDaerahRepository*/
    private $komenDaerahRepository;

    public function __construct(KomenDaerahRepository $komenDaerahRepo)
    {
        $this->komenDaerahRepository = $komenDaerahRepo;
    }

    /**
     * Display a listing of the KomenDaerah.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $komenDaerahs = $this->komenDaerahRepository->all();

        return view('komen_daerahs.index')
            ->with('komenDaerahs', $komenDaerahs);
    }

    /**
     * Show the form for creating a new KomenDaerah.
     *
     * @return Response
     */
    public function create()
    {
        return view('komen_daerahs.create');
    }

    /**
     * Store a newly created KomenDaerah in storage.
     *
     * @param CreateKomenDaerahRequest $request
     *
     * @return Response
     */
    public function store(CreateKomenDaerahRequest $request)
    {
        $input = $request->all();

        $komenDaerah = $this->komenDaerahRepository->create($input);

        Flash::success('Komen Daerah saved successfully.');

        return redirect(route('daerah.show',$request->berita_daerah_id));
    }

    /**
     * Display the specified KomenDaerah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $komenDaerah = $this->komenDaerahRepository->find($id);

        if (empty($komenDaerah)) {
            Flash::error('Komen Daerah not found');

            return redirect(route('komenDaerahs.index'));
        }

        return view('komen_daerahs.show')->with('komenDaerah', $komenDaerah);
    }

    /**
     * Show the form for editing the specified KomenDaerah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $komenDaerah = $this->komenDaerahRepository->find($id);

        if (empty($komenDaerah)) {
            Flash::error('Komen Daerah not found');

            return redirect(route('komenDaerahs.index'));
        }

        return view('komen_daerahs.edit')->with('komenDaerah', $komenDaerah);
    }

    /**
     * Update the specified KomenDaerah in storage.
     *
     * @param int $id
     * @param UpdateKomenDaerahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKomenDaerahRequest $request)
    {
        $komenDaerah = $this->komenDaerahRepository->find($id);

        if (empty($komenDaerah)) {
            Flash::error('Komen Daerah not found');

            return redirect(route('komenDaerahs.index'));
        }

        $komenDaerah = $this->komenDaerahRepository->update($request->all(), $id);

        Flash::success('Komen Daerah updated successfully.');

        return redirect(route('komenDaerahs.index'));
    }

    /**
     * Remove the specified KomenDaerah from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $komenDaerah = $this->komenDaerahRepository->find($id);

        if (empty($komenDaerah)) {
            Flash::error('Komen Daerah not found');

            return redirect(route('komenDaerahs.index'));
        }

        $this->komenDaerahRepository->delete($id);

        Flash::success('Komen Daerah deleted successfully.');

        return redirect(route('komenDaerahs.index'));
    }
}
