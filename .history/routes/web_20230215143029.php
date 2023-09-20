<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;

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

Route::get('/', function () {
    return view('keuangans.dashboard');
});
Route::get('/laporanop', function () {
    return view('keuangans.laporanoperasional');
});
Route::get('/tambahdata', function () {
    return view('keuangans.tambahdata');
});
Route::get('/tabellaporan', function () {
    return view('keuangans.tabellaporan');
});

Route::resource('keuangans', KeuanganController::class);
