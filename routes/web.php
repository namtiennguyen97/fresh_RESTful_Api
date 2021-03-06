<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//test
Route::get('/user/create', function (){
    return view('create');
});

// I dont use resource
Route::get('/user',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/user/{id}',[\App\Http\Controllers\UserController::class,'findOrFail']);
Route::post('/user/create',[\App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('/user/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');
Route::get('/user/show/{id}',[\App\Http\Controllers\UserController::class,'show']);
Route::get('/user/destroy/{id}',[\App\Http\Controllers\UserController::class,'destroy']);


//Route::resource('user',\App\Http\Controllers\UserController::class);
