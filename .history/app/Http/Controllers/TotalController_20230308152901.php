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
        $tanggal  = Tabungan::first('tanggal');
        $tabung = Tabungan::first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        return view('total.totalcetak', compact('tot', 'tat', 'tabung', 'tanggal'));
    }

    public function updateSaldo($id, Tabungan $tgl)
    {
        $tabung = Tabungan::first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        $hasil_perhitungan = $tabung->sum('uang') + $tot->sum('saldo') - $tat->sum('nominal');
        $sisa =  Tabungan::where('id', $id)->update(['uang' => $hasil_perhitungan, 'tanggal' => $tgl]);
        return view('total.totalcetak', compact('sisa'));
    }
}
