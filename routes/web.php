<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kriteria1Controller;
use App\Http\Controllers\Kriteria2Controller;

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
Route::get('/', [WelcomeController::class,'index']);
Route::get('/penetapan1', [Kriteria1Controller::class, 'penetapan'])->name('penetapan1.penetapan'); //Route untuk menampilkan Penetapan pada kriteria 1
Route::post('/penetapan1/store', [Kriteria1Controller::class, 'storePenetapan'])->name('penetapan1.store'); //Route untuk menyimpan Penetapan pada kriteria 1
Route::get('/pelaksanaan1', [Kriteria1Controller::class, 'pelaksanaan'])->name('pelaksanaan1.pelaksanaan'); //Route untuk menampilkan Pelaksanaan pada kriteria 1
Route::post('/pelaksanaan1/store', [Kriteria1Controller::class, 'storePelaksanaan'])->name('pelaksanaan1.store'); //Route untuk menyimpan Pelaksanaan pada kriteria 1
Route::get('/evaluasi1', [Kriteria1Controller::class, 'evaluasi'])->name('evaluasi1.pelaksanaan'); //Route untuk menampilkan Evaluasi pada kriteria 1
Route::post('/evaluasi1/store', [Kriteria1Controller::class, 'storeEvaluasi'])->name('evaluasi1.store'); //Route untuk menyimpan Evaluasi pada kriteria 1
Route::get('/pengendalian1', [Kriteria1Controller::class, 'pengendalian'])->name('pengendalian1.pelaksanaan'); //Route untuk menampilkan Pengendalian pada kriteria 1
Route::post('/pengendalian1/store', [Kriteria1Controller::class, 'storePengendalian'])->name('pengendalian1.store'); //Route untuk menyimpan Pengendalian pada kriteria 1
Route::get('/peningkatan1', [Kriteria1Controller::class, 'peningkatan'])->name('peningkatan1.pelaksanaan'); //Route untuk menampilkan Peningkatan pada kriteria 1
Route::post('/peningkatan1/store', [Kriteria1Controller::class, 'storePeningkatan'])->name('peningkatan1.store'); //Route untuk menyimpan Peningkatan pada kriteria 1
Route::get('/feedback1', [Kriteria1Controller::class, 'feedback'])->name('feedback1.feedback'); //Route untuk menampilkan Lihat Data pada kriteria 1
Route::post('/feedback1/list', [Kriteria1Controller::class, 'list'])->name('feedback1.list'); //Route untuk menampilkan Isi Lihat Data pada kriteria 1


//Kriteria 2
Route::get('/', [WelcomeController::class,'index']);
Route::get('/penetapan2', [Kriteria2Controller::class, 'penetapan'])->name('penetapan2.penetapan'); //Route untuk menampilkan Penetapan pada kriteria 2
Route::post('/penetapan2/store', [Kriteria2Controller::class, 'storePenetapan'])->name('penetapan2.store'); //Route untuk menyimpan Penetapan pada kriteria 2
Route::get('/pelaksanaan2', [Kriteria2Controller::class, 'pelaksanaan'])->name('pelaksanaan2.pelaksanaan'); //Route untuk menampilkan Pelaksanaan pada kriteria 2
Route::post('/pelaksanaan2/store', [Kriteria2Controller::class, 'storePelaksanaan'])->name('pelaksanaan2.store'); //Route untuk menyimpan Pelaksanaan pada kriteria 2
Route::get('/evaluasi2', [Kriteria2Controller::class, 'evaluasi'])->name('evaluasi2.pelaksanaan'); //Route untuk menampilkan Evaluasi pada kriteria 2
Route::post('/evaluasi2/store', [Kriteria2Controller::class, 'storeEvaluasi'])->name('evaluasi2.store'); //Route untuk menyimpan Evaluasi pada kriteria 2
Route::get('/pengendalian2', [Kriteria2Controller::class, 'pengendalian'])->name('pengendalian2.pelaksanaan'); //Route untuk menampilkan Pengendalian pada kriteria 2
Route::post('/pengendalian2/store', [Kriteria2Controller::class, 'storePengendalian'])->name('pengendalian2.store'); //Route untuk menyimpan Pengendalian pada kriteria 2
Route::get('/peningkatan2', [Kriteria2Controller::class, 'peningkatan'])->name('peningkatan2.pelaksanaan'); //Route untuk menampilkan Peningkatan pada kriteria 2
Route::post('/peningkatan/store', [Kriteria2Controller::class, 'storePeningkatan'])->name('peningkatan2.store'); //Route untuk menyimpan Peningkatan pada kriteria 2
Route::get('/feedback2', [Kriteria2Controller::class, 'feedback'])->name('feedback2.feedback'); //Route untuk menampilkan Lihat Data pada kriteria 2