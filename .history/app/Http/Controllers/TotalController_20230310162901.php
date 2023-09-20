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
    {;
        $tanggal  = Pemasukan::first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        $tampil = Tabungan::get();
        // ------------------ //

        // mengambil data terakhir pada model Tabungan
        $last_tabungan = Tabungan::orderBy('id', 'desc')->first();

        // mengambil nilai sebelumnya atau 0 jika tidak ada data sebelumnya
        $last_uang = $last_tabungan ? $last_tabungan->uang : 0;

        // menjumlahkan nilai uang dari model Tabung dan saldo dari model Tot, dikurangi dengan nilai nominal dari model Tat
        $uang_baru = $last_uang + $tot->sum('saldo') - $tat->sum('nominal');

        $tet = new Tabungan;
        $tet->uang = $uang_baru;
        $tet->tanggal = $tgl;
        $tet->save();
        return view('total.totalcetak', compact('tot', 'tat', 'tabung', 'tanggal', "tet", 'tampil'));
    }
}
