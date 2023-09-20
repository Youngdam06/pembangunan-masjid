<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TotalController extends Controller
{
    //menampilkan data berdasarkan range tanggal dari dan sampai.
    public function tampilPertanggal($tgl)
    {
        // dd($tgl);
        $tot = Pemasukan::with(['pemasukan'])->where('tanggal', [$tgl])->get();
        return view('total.cetak-total', compact('tot'));
    }
}
