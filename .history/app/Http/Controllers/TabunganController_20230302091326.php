<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
    //
    public function index()
    {
        return view('tabungan.kontensaldo');
    }
}
