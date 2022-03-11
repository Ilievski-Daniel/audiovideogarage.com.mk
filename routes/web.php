<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; 
use App\Http\Controllers\MultimediaController;

Route::delete('/delete-model/{id}', 'App\Http\Controllers\CarController@destroy');
Route::delete('/delete-multimedia/{id}', 'App\Http\Controllers\MultimediaController@destroy');
Route::get('/edit-model/{id}', 'App\Http\Controllers\CarController@edit');
Route::post('edit-model/{id}', 'App\Http\Controllers\CarController@update');
Route::view('login','login');
Route::get('add-multimedia',[CarController::class, 'show']);
Route::get('/',[MultimediaController::class, 'index']);
Route::view('add-model','add-model');
Route::view('contact','contact');
Route::get('models',[CarController::class, 'index']);
Route::post('add-model',[CarController::class, 'store']);
Route::post('add-multimedia',[MultimediaController::class, 'store']);
Route::get('car-model/{id}',[MultimediaController::class, 'show']);
Route::get('home',[CarController::class, 'showPanel']);
Route::get('car-multimedia/{id}',[MultimediaController::class, 'showMultimedia']);
Auth::routes();