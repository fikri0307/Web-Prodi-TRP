<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('pages.lab', compact('fasilitas'));
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('pages.lab_detail', compact('fasilitas'));
    }
}
