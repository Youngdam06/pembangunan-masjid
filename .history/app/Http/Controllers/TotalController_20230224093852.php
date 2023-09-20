<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    //
    public function tampilPertanggal($tglawal, $tglakhir)
    {
        // dd($tglawal,  $tglakhir);
        $tot = Pemasukan::with('keterangan')->whereBetween('id', [$tglawal, $tglakhir])->get();
    }
}
