<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index($id)
    {
        $tentang = About::where('judul',$id)->first();
        return view('user.tentang.index')
            ->with('tentang', $tentang);

    }
}
