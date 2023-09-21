<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Models\Berita;
use App\Models\Kategori;
use App\Repositories\BeritaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BeritaController extends AppBaseController
{
    /** @var BeritaRepository $beritaRepository */
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->middleware('auth');
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Berita.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
//        $beritas = $this->beritaRepository->all();
        $beritas = Berita::orderby('created_at', 'DESC')->get();

        return view('beritas.index')
            ->with('beritas', $beritas);
    }

    /**
     * Show the form for creating a new Berita.
     *
     * @return Response
     */
    public function create()
    {
        $kategori = Kategori::pluck('nama', 'id');

        return view('beritas.create')
            ->with('kategori', $kategori);
    }

    /**
     * Store a newly created Berita in storage.
     *
     * @param CreateBeritaRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaRequest $request)
    {
        $input = $request->all();

        $berita = $this->beritaRepository->create($input);

        $ber = Berita::find($berita->id);
        $file = $request->file('foto');
        $nama_file = time() . "_" . $request->nama . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'data/berita';
        $file->move($tujuan_upload, $nama_file);
        $ber->foto = $nama_file;
        $ber->save();

        Flash::success('Berita saved successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Display the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $berita = $this->beritaRepository->find($id);
        $kategori = Kategori::pluck('nama', 'id');

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.edit')
            ->with('berita', $berita)
            ->with('kategori', $kategori);

    }

    /**
     * Update the specified Berita in storage.
     *
     * @param int $id
     * @param UpdateBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaRequest $request)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }
        if ($file = $request->file('foto') != null) {
            $ber = Berita::find($id);

            $file_path = public_path() . "/data/berita/" . $ber->foto;
            echo $file_path;
            if (file_exists($file_path)) {
                // jalankan hapus file
                unlink($file_path);
            }

            $file = $request->file('foto');
            $nama_file = time() . "_" . $request->nama . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data/berita';
            $file->move($tujuan_upload, $nama_file);
            $ber->foto = $nama_file;
            $ber->save();
        }

        $berita = $this->beritaRepository->update($request->all(), $id);

        Flash::success('Berita updated successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Remove the specified Berita from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $this->beritaRepository->delete($id);

        Flash::success('Berita deleted successfully.');

        return redirect(route('beritas.index'));
    }
}
