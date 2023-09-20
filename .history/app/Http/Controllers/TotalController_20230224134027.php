<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TotalController extends Controller
{
    //menampilkan data berdasarkan range tanggal awal dan akhir.
    public function tampilPertanggal($tglawal, $tglakhir)
    {
        // dd($tglawal,  $tglakhir);
        $tot = Pemasukan::where('id')->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('total.cetak-total', compact('tot'));
    }

    public function sistemPertanggal()
    {
    }
}
