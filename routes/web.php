<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; 
use App\Http\Controllers\MultimediaController;

Route::view('login','login');
// Route::view('add-multimedia','add-multimedia');
Route::get('add-multimedia',[CarController::class, 'show']);
Route::get('/',[MultimediaController::class, 'index']);
// Route::get('/',[MultimediaController::class, 'insert']);
Route::view('add-model','add-model');
Route::view('contact','contact');
Route::get('models',[CarController::class, 'index']);
Route::post('add-model',[CarController::class, 'store']);
Route::post('add-multimedia',[MultimediaController::class, 'store']);
Route::get('car-model/{id}',[MultimediaController::class, 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
