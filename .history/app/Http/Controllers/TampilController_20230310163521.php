<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;

class TampilController extends Controller
{
    //
    public function recordData()
    {
        $tampil = Tabungan::get();
    }
}
