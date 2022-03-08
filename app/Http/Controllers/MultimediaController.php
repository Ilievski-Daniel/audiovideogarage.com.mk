<?php

namespace App\Http\Controllers;
Use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{

    public function index()
    {
        $multimedias = Multimedia::where('featured', 1)
        ->get();
        return view('index')
        ->with('multimedias', $multimedias);
    }

    public function show($id)
    {
        $multimedias = Multimedia::where('car_id', $id)
        ->orderBy('price')
        ->get();
        return view('car-model')
        ->with('multimedias', $multimedias);
    }
}
