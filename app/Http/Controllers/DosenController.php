<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
         public function dosen()
    {
         $dosens = Dosen::all();

         return view('pages.daftar_dosen', compact('dosens'));
    }
    public function detailDosen($id)
{
    $dosen = Dosen::with('academicBackgrounds')->findOrFail($id);

    return view('pages.detail_dosen', compact('dosen'));
}
}
