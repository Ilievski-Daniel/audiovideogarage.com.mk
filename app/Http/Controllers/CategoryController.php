<?php

namespace App\Http\Controllers;
Use App\Models\Multimedia;
Use App\Models\Car;
Use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
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

        $category = new category;
        $category->car_id = $request->car_id;
        $category->category_name = $request->carCategory;
        $category->image = $image_name;
        $category->save();
        
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::where('car_id', $id)
        ->get();
        return view('car-category')
        ->with('categories', $categories);
    }

    public function showAdd()
    {
        $categories = Category::all();
        $cars = Car::all();
        return view('add-category')
        ->with('categories', $categories)
        ->with('cars', $cars);
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
        $category = Category::find($id);
        return view('edit-category')
        ->with('cars', $cars)
        ->with('category', $category)
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
        $category = Category::find($id);
        $category->category_name = $request->carCategory;
        $category->image = $image_name;
        $category->save();
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
        Category::find($id)->delete();
        return redirect()->back();
    }
}
