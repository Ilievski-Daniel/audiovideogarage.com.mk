<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarModelController; 
use App\Http\Controllers\MultimediaController;


Route::view('/', 'index');
Route::view('add-model','add-model');
Route::view('contact','contact');
Route::get('models',[CarModelController::class, 'index']);
Route::post('add-model',[CarModelController::class, 'store']);
Route::get('car-model/{id}',[MultimediaController::class, 'show']);