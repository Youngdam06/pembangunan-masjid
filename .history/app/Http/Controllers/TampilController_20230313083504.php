<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class TampilController extends Controller
{
    //
    public function recordData($tgl)
    {
        $tanggal  = Pemasukan::first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        $tampil = Tabungan::get();
        return view('total.tabelcetak', compact('tampil', 'tot', 'tat', 'tabung', 'tanggal'));
    }
}
