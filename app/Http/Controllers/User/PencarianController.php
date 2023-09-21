<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $beritas = Berita::where(function ($query) use ($cari) {
            $query->where('judul','like',"%".$cari."%")
                ->orWhere('berita','like',"%".$cari."%");
        })->get();
//
        return view('user.pencarian.index')
            ->with('cari',$cari)
            ->with('beritas',$beritas);
    }
}
