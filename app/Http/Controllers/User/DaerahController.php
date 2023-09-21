<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BeritaDaerah;
use App\Models\Daerah;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DaerahController extends Controller
{
    public function index($id){
        $daerah = Daerah::find($id);
        $beritaDaerahs = BeritaDaerah::where('id',$daerah->id)->get();
        return view('user.daerah.index')
            ->with('daerah',$daerah)
            ->with('beritaDaerahs',$beritaDaerahs);
    }

    public function show($id){
        $beritaDaerah = BeritaDaerah::find($id);
        $berita_daerah_id = $id;
        return view('user.daerah.show')
            ->with('beritaDaerah', $beritaDaerah)
            ->with('berita_daerah_id', $berita_daerah_id);

    }
}
