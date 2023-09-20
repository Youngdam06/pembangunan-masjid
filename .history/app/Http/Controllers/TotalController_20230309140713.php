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
        $lastTabungan = Tabungan::latest()->first();
        // ------------------ //
        $tanggal  = Pemasukan::first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        $hasil_perhitungan = $lastTabungan->sum('uang') + $tot->sum('saldo') - $tat->sum('nominal');
        $tet = new Tabungan;
        $tet->uang = $hasil_perhitungan;
        $tet->tanggal = $tgl;
        $tet->save();
        return view('total.totalcetak', compact('tot', 'tat', 'tabung', 'tanggal', "tet"));
    }
}
