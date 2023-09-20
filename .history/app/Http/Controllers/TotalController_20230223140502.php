<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotalController extends Controller
{
    //
    public function tampilPertanggal($tglawal, $tglakhir)
    {
        dd("Tanggal Awal : " .$tglawal , "Tanggal Akhir : " .$tglakhir)
    }
}
