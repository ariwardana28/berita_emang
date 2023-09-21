<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIklanRequest;
use App\Http\Requests\UpdateIklanRequest;
use App\Models\Iklan;
use App\Repositories\IklanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class IklanController extends AppBaseController
{
    /** @var IklanRepository $iklanRepository*/
    private $iklanRepository;

    public function __construct(IklanRepository $iklanRepo)
    {
        $this->iklanRepository = $iklanRepo;
    }

    /**
     * Display a listing of the Iklan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $iklans = $this->iklanRepository->all();

        return view('iklans.index')
            ->with('iklans', $iklans);
    }

    /**
     * Show the form for creating a new Iklan.
     *
     * @return Response
     */
    public function create()
    {
        return view('iklans.create');
    }

    /**
     * Store a newly created Iklan in storage.
     *
     * @param CreateIklanRequest $request
     *
     * @return Response
     */
    public function store(CreateIklanRequest $request)
    {
        $input = $request->all();

//        $iklan = $this->iklanRepository->create($input);
        $iklan = new Iklan();
        $file = $request->file('foto');
        $nama_file = time() . "_" .  $file->getClientOriginalName();
        $tujuan_upload = 'data/iklan';
        $file->move($tujuan_upload, $nama_file);
        $iklan->foto = $nama_file;
        $iklan->save();
        Flash::success('Iklan saved successfully.');

        return redirect(route('iklans.index'));
    }

    /**
     * Display the specified Iklan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $iklan = $this->iklanRepository->find($id);

        if (empty($iklan)) {
            Flash::error('Iklan not found');

            return redirect(route('iklans.index'));
        }

        return view('iklans.show')->with('iklan', $iklan);
    }

    /**
     * Show the form for editing the specified Iklan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $iklan = $this->iklanRepository->find($id);

        if (empty($iklan)) {
            Flash::error('Iklan not found');

            return redirect(route('iklans.index'));
        }

        return view('iklans.edit')->with('iklan', $iklan);
    }

    /**
     * Update the specified Iklan in storage.
     *
     * @param int $id
     * @param UpdateIklanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIklanRequest $request)
    {
        $iklan = $this->iklanRepository->find($id);

        if (empty($iklan)) {
            Flash::error('Iklan not found');

            return redirect(route('iklans.index'));
        }

//        $iklan = $this->iklanRepository->update($request->all(), $id);

        if ($file = $request->file('foto') != null) {
            $iklan = Iklan::find($id);

            $file_path = public_path() . "/data/iklan/" . $iklan->foto;
            echo $file_path;
            if (file_exists($file_path)) {
                // jalankan hapus file
                unlink($file_path);
            }

            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data/iklan';
            $file->move($tujuan_upload, $nama_file);
            $iklan->foto = $nama_file;
            $iklan->save();
        }

        Flash::success('Iklan updated successfully.');

        return redirect(route('iklans.index'));
    }

    /**
     * Remove the specified Iklan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $iklan = $this->iklanRepository->find($id);

        if (empty($iklan)) {
            Flash::error('Iklan not found');

            return redirect(route('iklans.index'));
        }

        $this->iklanRepository->delete($id);

        Flash::success('Iklan deleted successfully.');

        return redirect(route('iklans.index'));
    }
}
