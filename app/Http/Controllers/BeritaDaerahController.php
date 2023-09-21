<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeritaDaerahRequest;
use App\Http\Requests\UpdateBeritaDaerahRequest;
use App\Models\BeritaDaerah;
use App\Models\Daerah;
use App\Repositories\BeritaDaerahRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BeritaDaerahController extends AppBaseController
{
    /** @var BeritaDaerahRepository $beritaDaerahRepository */
    private $beritaDaerahRepository;

    public function __construct(BeritaDaerahRepository $beritaDaerahRepo)
    {
        $this->beritaDaerahRepository = $beritaDaerahRepo;
    }

    /**
     * Display a listing of the BeritaDaerah.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $beritaDaerahs = $this->beritaDaerahRepository->all();

        return view('berita_daerahs.index')
            ->with('beritaDaerahs', $beritaDaerahs);
    }

    /**
     * Show the form for creating a new BeritaDaerah.
     *
     * @return Response
     */
    public function create()
    {
        $daerah = Daerah::pluck('nama', 'id');

        return view('berita_daerahs.create')
            ->with('daerah', $daerah);
    }

    /**
     * Store a newly created BeritaDaerah in storage.
     *
     * @param CreateBeritaDaerahRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaDaerahRequest $request)
    {
        $input = $request->all();

        $beritaDaerah = $this->beritaDaerahRepository->create($input);

        $ber = BeritaDaerah::find($beritaDaerah->id);
        $file = $request->file('foto');
        $nama_file = time() . "_" . $request->nama . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'data/beritaDaerah';
        $file->move($tujuan_upload, $nama_file);
        $ber->foto = $nama_file;
        $ber->save();

        Flash::success('Berita Daerah saved successfully.');

        return redirect(route('beritaDaerahs.index'));
    }

    /**
     * Display the specified BeritaDaerah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $beritaDaerah = $this->beritaDaerahRepository->find($id);

        if (empty($beritaDaerah)) {
            Flash::error('Berita Daerah not found');

            return redirect(route('beritaDaerahs.index'));
        }

        return view('berita_daerahs.show')->with('beritaDaerah', $beritaDaerah);
    }

    /**
     * Show the form for editing the specified BeritaDaerah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $beritaDaerah = $this->beritaDaerahRepository->find($id);
        $daerah = Daerah::pluck('nama', 'id');

        if (empty($beritaDaerah)) {
            Flash::error('Berita Daerah not found');

            return redirect(route('beritaDaerahs.index'));
        }

        return view('berita_daerahs.edit')
            ->with('daerah', $daerah)
            ->with('beritaDaerah', $beritaDaerah);
    }

    /**
     * Update the specified BeritaDaerah in storage.
     *
     * @param int $id
     * @param UpdateBeritaDaerahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaDaerahRequest $request)
    {
        $beritaDaerah = $this->beritaDaerahRepository->find($id);

        if ($file = $request->file('foto') != null) {
            $ber = BeritaDaerah::find($id);

            $file_path = public_path() . "/data/beritaDaerah/" . $ber->foto;
            echo $file_path;
            if (file_exists($file_path)) {
                // jalankan hapus file
                unlink($file_path);
            }

            $file = $request->file('foto');
            $nama_file = time() . "_" . $request->nama . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data/beritaDaerah';
            $file->move($tujuan_upload, $nama_file);
            $ber->foto = $nama_file;
            $ber->save();
        }

        if (empty($beritaDaerah)) {
            Flash::error('Berita Daerah not found');

            return redirect(route('beritaDaerahs.index'));
        }

        $beritaDaerah = $this->beritaDaerahRepository->update($request->all(), $id);

        Flash::success('Berita Daerah updated successfully.');

        return redirect(route('beritaDaerahs.index'));
    }

    /**
     * Remove the specified BeritaDaerah from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $beritaDaerah = $this->beritaDaerahRepository->find($id);

        if (empty($beritaDaerah)) {
            Flash::error('Berita Daerah not found');

            return redirect(route('beritaDaerahs.index'));
        }

        $this->beritaDaerahRepository->delete($id);

        Flash::success('Berita Daerah deleted successfully.');

        return redirect(route('beritaDaerahs.index'));
    }
}
