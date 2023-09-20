<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Models\Pemasukan;

class TampilController extends Controller
{
    //
    public function index($tgl)
    {
        $tanggal  = Pemasukan::first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $peng = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $pem = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        $tampil = Tabungan::get();
        return view('total.tabelcetak', compact('tampil', 'pem', 'peng', 'tabung', 'tanggal', 'tgl'));
    }
}
