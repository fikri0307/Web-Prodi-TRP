<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class Halaman_utamaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest('tanggal_dibuat')
            ->take(3)
            ->get();

        return view('pages.halaman_utama', compact('beritas'));
    }
}
