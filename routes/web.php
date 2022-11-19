<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MahasiswaController::class,'show']);
Route::get('/home',[MahasiswaController::class,'show']);
Route::get('/add',[MahasiswaController::class,'add']);
Route::get('/add/addAct',[MahasiswaController::class,'addAct']);
Route::get('/edit/{id}',[MahasiswaController::class,'edit']);
Route::get('/editAct',[MahasiswaController::class,'editAct']);
Route::get('/delete/{id}',[MahasiswaController::class,'delete']);
Route::get('/about', function () {
    return view('about');
});