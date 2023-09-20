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
        // dd($tglawal,  $tglakhir);


        $tot = Pemasukan::with(['pengeluaran'])->whereHas('pengeluaran', function($query){
            $query->whereIn('jenis', ['Makan', 'Kasbon'])->where('tanggal', [$tgl])->get();
        return view('total.cetak-total', compact('tot'));
    }
}
