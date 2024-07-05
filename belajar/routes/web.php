<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/master', function(){
    return view('layouts.master');
});


Route::get('/data-tables',function(){
    return view('page.data-table');
});

Route::get('/table', function(){
    return view('page.table');
});


//CRUD Cast
//Create Data
Route::get('/cast/create',[CastController::class,'create']);
//simpan data
Route::post('/cast',[CastController::class,'store']);

//read data
//tampil semua cast
Route::get('/cast',[CastController::class,'index']);
//detail data
Route::get('/cast/{id}',[CastController::class,'show']);


//uodate Data
Route::get('/cast/{id}/edit',[CastController::class,'edit']);
//kirim data update
Route::put('/cast/{id}',[CastController::class,'update']);


//delete data
Route::delete('/cast/{id}',[CastController::class,'destroy']);


//CRUD Genre
Route::resource('genre',GenreController::class);


//CRUD Film
Route::resource('film',FilmController::class);