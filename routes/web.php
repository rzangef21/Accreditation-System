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