<?php

namespace App\Http\Controllers;
Use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function show($id)
    {
        $multimedias = Multimedia::all();
        return view('car-model')
        ->with('multimedias', $multimedias);
    }
}
