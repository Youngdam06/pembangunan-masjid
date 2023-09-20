<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class TotulController extends Controller
{
    //
    public function tampilPertanggal2($tglkeluar)
    {
        // dd('pengeluaran', $tglkeluar);
        $data1 = Pemasukan::sum('saldo');
        $data2 = Pengeluaran::sum('nominal');
        $total = ($data2 - $data1);
        // return view('total.cetak-total-keluar', compact('data1', 'data2', 'total'));

        $tat = Pengeluaran::with(['pemasukan'])->where('tanggal', [$tglkeluar])->get();
        return view('total.cetak-total-keluar', compact('tat', 'total'));
    }
}
