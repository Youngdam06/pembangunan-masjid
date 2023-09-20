<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;

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
