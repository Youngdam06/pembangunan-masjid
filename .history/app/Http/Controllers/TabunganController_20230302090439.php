<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
    //
    public function tampil()
    {
        return view('tabungan.isi-saldo', compact('tabungans'))
    }
}
