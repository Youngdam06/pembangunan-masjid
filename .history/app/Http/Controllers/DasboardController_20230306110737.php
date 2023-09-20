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
    // public function dashboard()
    // {
    //     $tanggal  = Tabungan::first('tanggal');
    //     $tabung = Tabungan::first('uang');
    //     $tat = Pengeluaran::with('pemasukan')->where('tanggal')->get();
    //     $tot = Pemasukan::with('pengeluaran')->where('tanggal')->get();
    //     return view('cetak-total', compact('tot', 'tat', 'tabung', 'tanggal'));
    // }

    public function index()
    {
        $tanggal = date('d-m-Y');
        $pemasukans = Pemasukan::latest()->paginate(15);
        $pengeluarans = Pengeluaran::latest()->paginate(15);
        return view('cetak-total', compact('pemasukans', 'pengeluarans'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }
}
