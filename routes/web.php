<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarModelController; 

Route::view('/', 'index');
Route::view('add-model','add-model');
Route::view('contact','contact');
Route::get('models',[CarModelController::class, 'index']);
Route::post('add-model',[CarModelController::class, 'store']);