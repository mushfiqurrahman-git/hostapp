<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/doctor',[DoctorController::class,'index']);

Route::post('/doctor',[DoctorController::class,'create'])->name('doctor');

Route::get('/edit/{id}',[DoctorController::class,'edit'])->name('doctor');

Route::put('/edit/{id}',[DoctorController::class,'update'])->name('doctor');

Route::get('/delete/{id}',[DoctorController::class,'delete'])->name('doctor');