<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\TotulController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KeuanganController;
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

Route::get('/total', [PengeluaranController::class, 'tambah']);
Route::resource('pemasukans', PemasukanController::class);
Route::resource('pengeluarans', PengeluaranController::class);
Route::resource('keuangans', KeuanganController::class);
Route::get('/tampil-data-pertanggal-pemasukan/{tgl}', [TotalController::class, 'tampilPertanggal']);
Route::get('/tampil-data-pertanggal-pengeluaran/{tgl2}', [TotalController::class, 'tampilPertanggal2']);


Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'post']);
