<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kriteria1Controller;
use App\Http\Controllers\Kriteria2Controller;
use App\Http\Controllers\Kriteria3Controller;
use App\Http\Controllers\Kriteria4Controller;
use App\Http\Controllers\Kriteria5Controller;

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

//Kriteria 1
Route::get('/', [Kriteria1Controller::class, 'kriteria1'])->name('kriteria1'); //Menampilkan input data kriteria 1
Route::post('/storeAll', [Kriteria1Controller::class, 'storeValidasi1'])->name('kriteria1.storeAll'); //Menyimpan data kriteria 1 semua

//Kriteria 2
Route::get('/kriteria2', [Kriteria2Controller::class, 'kriteria2'])->name('kriteria2'); //Menampilkan input data kriteria 2

//Kriteria 3
Route::get('/kriteria3', [Kriteria3Controller::class, 'kriteria3'])->name('kriteria3'); //Menampilkan input data kriteria 3

//Kriteria 4
Route::get('/kriteria4', [Kriteria4Controller::class, 'kriteria4'])->name('kriteria4'); //Menampilkan input data kriteria 4

//Kriteria 5
Route::get('/kriteria5', [Kriteria5Controller::class, 'kriteria5'])->name('kriteria5'); //Menampilkan input data kriteria 5