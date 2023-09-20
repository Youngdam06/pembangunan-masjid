<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
    //
    public function index()
    {
        $tabungan = Tabungan::get();
        return view('tabungan.isi-saldo');
    }
}
