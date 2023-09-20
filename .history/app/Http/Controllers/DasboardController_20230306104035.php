<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Routing\Controller;

class DasboardController extends Controller
{
    //
    public function dashboard()
    {
        $tanggal  = Tabungan::first('tanggal');
        $tabung = Tabungan::first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal')->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal')->get();
        return view('cetak-total', compact('tot', 'tat', 'tabung', 'tanggal'));
    }
}
