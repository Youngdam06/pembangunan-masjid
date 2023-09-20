<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;

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

Route::resource('/', DasboardController::class);
Route::get('/total', [TotalController::class, 'recordData']);
Route::resource('pemasukans', PemasukanController::class);
Route::resource('pengeluarans', PengeluaranController::class);
Route::resource('keuangans', KeuanganController::class);
Route::get('/tampil-data-pertanggal/{tgl}', [TotalController::class, 'tampilPertanggal']);
Route::get('/tampil-data-pertanggal/{id}/{tgl}', [TotalController::class, 'updateSaldo']);
Route::resource('tabungans', TabunganController::class);

// sesi login dan register
Route::get('/login', [SessionController::class, 'indexlogin'])->middleware('guest');
Route::get('/register', [SessionController::class, 'indexregister'])->middleware('guest');
Route::post('/logins', [SessionController::class, 'postlogin']);
Route::post('/registers', [SessionController::class, 'store']);
Route::get('/logouts', [SessionController::class, 'logout']);

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'post']);
