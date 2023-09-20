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

    public function pemasukan()
    {
        $tanggal = date('d-m-Y');
        $pemasukans = Pemasukan::latest()->paginate(15);
        return view('pemasukans/laporanpemasukans', compact('pemasukans'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function pengeluaran()
    {
        $pengeluarans = Pengeluaran::latest()->paginate(10);
        return view('pengeluarans/laporanpengeluarans', compact('pengeluarans'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
