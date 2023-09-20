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
        $tot = Pemasukan::all();
        return view('total.cetak-total', compact('tot'));
    }

    public function sistemPertanggal()
    {
    }
}
