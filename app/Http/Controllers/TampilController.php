<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TampilController extends Controller
{
    //
    public function index()
    {
        $tanggal  = Pemasukan::latest()->first('tanggal');
        $tabung = Tabungan::latest()->first('uang');
        $peng = Pengeluaran::with('pemasukan')->where('tanggal')->get();
        $pem = Pemasukan::with('pengeluaran')->where('tanggal')->get();
        $tampil = Tabungan::get();
        return view('total.tabelcetak', compact('tampil', 'pem', 'peng', 'tabung', 'tanggal'));
    }

    public function tampilPerTahun(Request $request)
    {
        $tahun = $request->input('tahun');
    
        if (empty($tahun)) {
            // Redirect ke halaman sebelumnya dengan pesan error jika tahun tidak diisi
            return redirect()->back()->with('error', 'Harap pilih tahun terlebih dahulu!');
        }
    
        // Ambil data dari model Tabungan, Pemasukan, dan Pengeluaran dengan menggunakan metode whereYear()
        $tabungan = Tabungan::whereYear('tanggal', $tahun)->get();
        $pemasukan = Pemasukan::with('pengeluaran')->whereYear('tanggal', $tahun)->get();
        $pengeluaran = Pengeluaran::with('pemasukan')->whereYear('tanggal', $tahun)->get();
    
        // Hitung total uang masuk dan keluar pada setiap tahun
        $total_masuk = $pemasukan->sum('saldo');
        $total_keluar = $pengeluaran->sum('nominal');
    
        // Hitung total saldo akhir pada setiap tahun
        $total_saldo_akhir = $tabungan->sum('uang');
    
        // Tampilkan hasil per tahun pada tampilan Anda
        return view('tahunan.layouttahunan', compact('pemasukan', 'pengeluaran', 'tabungan', 'tahun', 'total_masuk', 'total_keluar', 'total_saldo_akhir'));
    }
}

