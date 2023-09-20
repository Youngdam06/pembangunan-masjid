<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class TotulController extends Controller
{
    //
    public function tampilPertanggal2($tglkeluar)
    {
        dd('pengeluaran', $tglkeluar);
        // $tat = Pengeluaran::with(['pemasukan'])->where('tanggal', [$tgl])->get();
        // return view('total.cetak-total', compact('tat'));
    }
}
