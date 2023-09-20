<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Models\Pemasukan;

class TampilController extends Controller
{
    //
    public function index()
    {
        $tanggal  = Pemasukan::first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $peng = Pengeluaran::with('pemasukan')->where('tanggal')->get();
        $pem = Pemasukan::with('pengeluaran')->where('tanggal')->get();
        $tampil = Tabungan::get();
        return view('total.tabelcetak', compact('tampil', 'pem', 'peng', 'tabung', 'tanggal'));
    }

    public function tampilData($tanggal)
    {
        $tanggal  = Pemasukan::first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $peng = Pengeluaran::with('pemasukan')->where('tanggal', [$tanggal])->get();
        $pem = Pemasukan::with('pengeluaran')->where('tanggal', [$tanggal])->get();
        $tampil = Tabungan::get();
        return view('total.tabelcetak', compact('tampil', 'pem', 'peng', 'tabung', 'tanggal'));
    }
}
