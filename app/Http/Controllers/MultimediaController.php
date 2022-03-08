<?php

namespace App\Http\Controllers;
Use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function show($id)
    {
        $multimedias = Multimedia::where('car_id', $id)
        ->orderBy('price')
        ->get();
        return view('car-model')
        ->with('multimedias', $multimedias);
    }
}
