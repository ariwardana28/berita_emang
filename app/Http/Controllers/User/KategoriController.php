<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Daerah;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($id)
    {
        $kategoris = Kategori::find($id);
        $beritas = Berita::where('kategori_id', $id)->get();
        return view('user.kategori.index')
            ->with('kategoris', $kategoris)
            ->with('beritas', $beritas);

    }

    public function show($id){
        $beritas = Berita::find($id);
        $berita_id = $id;
        return view('user.kategori.show')
            ->with('berita_id', $berita_id)
            ->with('beritas', $beritas);

    }
}
