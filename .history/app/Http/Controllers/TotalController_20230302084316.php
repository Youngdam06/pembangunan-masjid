<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TotalController extends Controller
{
    //menampilkan data berdasarkan range tanggwal dari dan sampai.
    public function tampilPertanggal($tgl)
    {
        $tanggal  = Pengeluaran::get('tanggal');
        $tabung = Tabungan::first('tabungan');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        return view('total.cetak-total', compact('tot', 'tat', 'tabung'));
    }
}
