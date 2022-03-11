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

    public function showMultimedia($id)
    {
        $multimedias = Multimedia::where('id', $id)
        ->get();
        return view('car-multimedia')
        ->with('multimedias', $multimedias);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/multimedias';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }

        $multimedia = new Multimedia;
        $multimedia->name = $request->name;
        $multimedia->image = $image_name;
        $multimedia->price = $request->price;
        $multimedia->short_description = $request->short_description;
        $multimedia->long_description = $request->long_description;
        $multimedia->car_id = $request->car_id;
        $multimedia->featured = $request->featured;
        $multimedia->save();
        return redirect('home');
    }

    public function destroy($id)
    {
        Multimedia::find($id)->delete();
        return redirect()->back();
    }

}
