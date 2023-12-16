<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LokerController;


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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('home',[HomeController::class,'show']);

Route::get('dashAdmin',[UserController::class,'show']);
Route::get('ajukan',[LokerController::class,'show'])->middleware('isLogin');
Route::post('buat',[LokerController::class,'buat']);

// Route::get('admin',[UserController::class,'show'])->name('admin');
Route::get('dataAlumni',[UserController::class,'index']);
Route::get('dashAdmin',[UserController::class,'show']);
Route::get('dataLoker',[UserController::class,'data']);
Route::post('loker/update/{id}',[UserController::class,'update']);


Route::get('register',[UserController::class,'register']);
Route::post('register/create',[UserController::class,'create']);
Route::post('/auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout']);
