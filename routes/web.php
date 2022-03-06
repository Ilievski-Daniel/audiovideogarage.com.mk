<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; 
use App\Http\Controllers\MultimediaController;


Route::view('/', 'index');
Route::view('add-model','add-model');
Route::view('contact','contact');
Route::get('models',[CarController::class, 'index']);
Route::post('add-model',[CarController::class, 'store']);
Route::get('car-model/{id}',[MultimediaController::class, 'show']);