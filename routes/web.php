<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kriteria1Controller;

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

Route::get('/', [WelcomeController::class,'index']);
Route::get('/penetapan1', [Kriteria1Controller::class, 'penetapan'])->name('penetapan1.penetapan'); //Route untuk menampilkan Penetapan pada kriteria 1
Route::post('/penetapan1/store', [Kriteria1Controller::class, 'storePenetapan'])->name('penetapan1.store'); //Route untuk menyimpan Penetapan pada kriteria 1
Route::get('/pelaksanaan1', [Kriteria1Controller::class, 'pelaksanaan'])->name('pelaksanaan1.pelaksanaan'); //Route untuk menampilkan Pelaksanaan pada kriteria 1
Route::post('/pelaksanaan1/store', [Kriteria1Controller::class, 'storePelaksanaan'])->name('pelaksanaan1.store'); //Route untuk menyimpan Pelaksanaan pada kriteria 1
Route::get('/evaluasi1', [Kriteria1Controller::class, 'evaluasi'])->name('evaluasi1.pelaksanaan'); //Route untuk menampilkan Evaluasi pada kriteria 1
Route::post('/evaluasi1/store', [Kriteria1Controller::class, 'storeEvaluasi'])->name('evaluasi1.store'); //Route untuk menyimpan Evaluasi pada kriteria 1
Route::get('/pengendalian1', [Kriteria1Controller::class, 'pengendalian'])->name('pengendalian1.pelaksanaan'); //Route untuk menampilkan Pengendalian pada kriteria 1
Route::post('/pengendalian1/store', [Kriteria1Controller::class, 'storePengendalian'])->name('pengendalian1.store'); //Route untuk menyimpan Pengendalian pada kriteria 1