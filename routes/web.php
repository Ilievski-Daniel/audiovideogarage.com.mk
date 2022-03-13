<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; 
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\CategoryController;

// Public routes
Route::view('login','login');
Route::view('contact','contact');
Route::get('/',[MultimediaController::class, 'index']);
Route::get('models',[CarController::class, 'index']);
Route::get('car-category/{id}',[CategoryController::class, 'show']);
Route::get('car-model/{id}',[MultimediaController::class, 'show']);
Route::get('car-multimedia/{id}',[MultimediaController::class, 'showMultimedia']);

Route::middleware(['auth'])->group(function () {
    // Routes for admin-dashboard
    Route::view('home','home');
    Route::get('home',[CarController::class, 'showPanel']);
    // Routes for categories 
    Route::get('add-category',[CategoryController::class, 'showAdd']);
    Route::post('add-category',[CategoryController::class, 'store']);
    Route::get('/edit-category/{id}', 'App\Http\Controllers\CategoryController@edit');
    Route::post('edit-category/{id}', 'App\Http\Controllers\CategoryController@update');
    Route::delete('/delete-category/{id}', 'App\Http\Controllers\CategoryController@destroy');
    // Routes for car models 
    Route::view('add-model','add-model');
    Route::post('add-model',[CarController::class, 'store']);
    Route::get('/edit-model/{id}', 'App\Http\Controllers\CarController@edit');
    Route::post('edit-model/{id}', 'App\Http\Controllers\CarController@update');
    Route::delete('/delete-model/{id}', 'App\Http\Controllers\CarController@destroy');
    // Routes for multimedias 
    Route::get('add-multimedia',[CarController::class, 'show']);
    Route::post('add-multimedia',[MultimediaController::class, 'store']);
    Route::get('/edit-multimedia/{id}', 'App\Http\Controllers\MultimediaController@edit');
    Route::post('edit-multimedia/{id}', 'App\Http\Controllers\MultimediaController@update');
    Route::delete('/delete-multimedia/{id}', 'App\Http\Controllers\MultimediaController@destroy');
});

Auth::routes();