<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TotalController extends Controller
{
    //menampilkan data berdasarkan range tanggal dari dan sampai.
    public function tampilPertanggal($tgldari, $tglsampai)
    {
        // dd($tglawal,  $tglakhir);
        $tot = Pemasukan::where('id')->whereBetween('tanggal', [$tgldari, $tglsampai])->get();
        return view('total.cetak-total', compact('tot'));

        $total = Pengeluaran::all();
        return view('total.cetak-total', compact('total'));
    }

    public function sistemPertanggal()
    {
    }
}
