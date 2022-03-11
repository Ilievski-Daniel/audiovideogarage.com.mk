<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use App\Models\Multimedia;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::All();
        return view('show-all-models', ['cars' => $cars, 'name' => 'Victoria']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/cars';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }

        $car = new car;
        $car->model_name = $request->carModel;
        $car->image = $image_name;
        $car->save();
        
        //Store image in storage/images
        // $file = $request->file('file');
        // $name = $file->hashName();
        // $path = $request->file('file')->storeAs('images', $name);

        // //Store image in database
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cars = Car::all();
        return view('add-multimedia')
        ->with('cars', $cars);
    }

    public function showPanel()
    {
        $cars = Car::all();
        $multimedias = Multimedia::all();
        return view('home')
        ->with('cars', $cars)
        ->with('multimedias', $multimedias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::all();
        $multimedias = Multimedia::all();
        $car = Car::find($id);
        return view('edit-model')
        ->with('car', $car)
        ->with('cars', $cars)
        ->with('multimedias', $multimedias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/cars';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }
        $car = Car::find($id);
        $car->model_name = $request->model_name;
        $car->image = $image_name;
        $car->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::find($id)->delete();
        return redirect()->back();
    }
}
