<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(9);
        return view('pages.galeri', compact('galeris'));
    }
}
