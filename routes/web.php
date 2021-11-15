<?php

use App\Http\Controllers\MenuController;
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



Route::get('/',[MenuController::class,'menu']);
Route::get('/deshboard',[MenuController::class,'deshboardIndex'])->name('deshboard');
Route::get('/create',[MenuController::class,'create'])->name('create');
Route::post('/create',[MenuController::class,'store']);
Route::get('delete/{id}',[MenuController::class,'delete'])->name('delete');

