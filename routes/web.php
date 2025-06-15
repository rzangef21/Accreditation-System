<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kriteria1Controller;
use App\Http\Controllers\Kriteria2Controller;
use App\Http\Controllers\Kriteria3Controller;
use App\Http\Controllers\Kriteria4Controller;
use App\Http\Controllers\Kriteria5Controller;
use App\Http\Controllers\Kriteria6Controller;
use App\Http\Controllers\Kriteria7Controller;
use App\Http\Controllers\Kriteria8Controller;
use App\Http\Controllers\Kriteria9Controller;

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
Route::get('/feedback1', [Kriteria1Controller::class, 'feedback1'])->name('feedback1');
Route::post('/feedback1/list', [Kriteria1Controller::class, 'list'])->name('feedback1.list');

//Kriteria 2
Route::get('/kriteria2', [Kriteria2Controller::class, 'kriteria2'])->name('kriteria2'); //Menampilkan input data kriteria 2
Route::post('/kriteria2/storeAll', [Kriteria2Controller::class, 'storeValidasi1'])->name('kriteria2.storeAll'); //Menyimpan data kriteria 2 semua

//Kriteria 3
Route::get('/kriteria3', [Kriteria3Controller::class, 'kriteria3'])->name('kriteria3'); //Menampilkan input data kriteria 3

//Kriteria 4
Route::get('/kriteria4', [Kriteria4Controller::class, 'kriteria4'])->name('kriteria4'); //Menampilkan input data kriteria 4

//Kriteria 5
Route::get('/kriteria5', [Kriteria5Controller::class, 'kriteria5'])->name('kriteria5'); //Menampilkan input data kriteria 5

//Kriteria 6
Route::get('/kriteria6', [Kriteria6Controller::class, 'kriteria6'])->name('kriteria6'); //Menampilkan input data kriteria 6

//Kriteria 7
Route::get('/kriteria7', [Kriteria7Controller::class, 'kriteria7'])->name('kriteria7'); //Menampilkan input data kriteria 7

//Kriteria 8
Route::get('/kriteria8', [Kriteria8Controller::class, 'kriteria8'])->name('kriteria8'); //Menampilkan input data kriteria 8

//Kriteria 9
Route::get('/kriteria9', [Kriteria9Controller::class, 'kriteria9'])->name('kriteria9'); //Menampilkan input data kriteria 9