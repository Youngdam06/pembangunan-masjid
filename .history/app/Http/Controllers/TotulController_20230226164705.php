<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotulController extends Controller
{
    //
    public function tampilPertanggal2()
    {
        // dd('pemasukan', $tgl);
        $tat = Pemasukan::with(['pengeluaran'])->where('tanggal', [$tgl])->get();
        return view('total.cetak-total', compact('tat'));
    }
}
