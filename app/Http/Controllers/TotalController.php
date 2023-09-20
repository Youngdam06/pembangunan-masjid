<?php

namespace App\Http\Controllers;

use tet;
use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TotalController extends Controller
{
    public function tampilPertanggal($tgl)
    {;
        $tanggal  = Tabungan::latest()->first('tanggal');
        $tanggal1 = Tabungan::latest()->first();
        $tabung = Tabungan::latest()->first('uang');
        $tat = Pengeluaran::with('pemasukan')->where('tanggal', [$tgl])->get();
        $tot = Pemasukan::with('pengeluaran')->where('tanggal', [$tgl])->get();
        // ------------------ //

        if ($tot->isEmpty() && $tat->isEmpty()) {
            abort(404, 'Data tidak ditemukan!');
        }
        // mengambil data terakhir pada model Tabungan
        $last_tabungan = Tabungan::orderBy('id', 'desc')->first();

        // mengambil nilai sebelumnya atau 0 jika tidak ada data sebelumnya
        $last_uang = $last_tabungan ? $last_tabungan->uang : 0;

        // menjumlahkan nilai uang dari model Tabung dan saldo dari model Tot, dikurangi dengan nilai nominal dari model Tat
        $uang_baru = $last_uang + $tot->sum('saldo') - $tat->sum('nominal');

        $tet = Tabungan::firstOrCreate([
            'tanggal' => $tgl,
        ], [
            'uang' => $uang_baru,
        ]);
        $tet->save();

        $tet_sebelum = $tet->previous();

        return view('total.totalcetak', compact('tot', 'tat', 'tabung', 'tanggal', 'tanggal1', "tet", 'tet_sebelum'));
    }

    public function tampilPerBulan(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
    
        if (empty($bulan) || empty($tahun)) {
            // Redirect ke halaman sebelumnya dengan pesan error jika bulan atau tahun tidak diisi
            return redirect()->back()->with('error', 'Harap pilih bulan dan tahun terlebih dahulu!');
        }
    
        // Ambil data dari model Tabungan, Pemasukan, dan Pengeluaran dengan menggunakan metode whereMonth()
        $tabungan = Tabungan::whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun)->get();
        $pemasukan = Pemasukan::with('pengeluaran')->whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun)->get();
        $pengeluaran = Pengeluaran::with('pemasukan')->whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun)->get();
    
        // Hitung total uang masuk dan keluar pada setiap bulan
        $total_masuk = $pemasukan->sum('saldo');
        $total_keluar = $pengeluaran->sum('nominal');
    
        // Hitung total saldo akhir pada setiap bulan
        $total_saldo_akhir = $tabungan->sum('uang');
    
        // Tampilkan hasil per bulan pada tampilan Anda
        return view('bulanan.layouttabelbulan', compact('pemasukan', 'pengeluaran', 'tabungan', 'bulan', 'tahun', 'total_masuk', 'total_keluar', 'total_saldo_akhir'));
    }

    public function tampilPerTahun(Request $request)
    {
        $tahun = $request->input('tahun');
        $uang = Tabungan::get();
    
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
        return view('tahunan.layouttahunan', compact('uang', 'pemasukan', 'pengeluaran', 'tabungan', 'tahun', 'total_masuk', 'total_keluar', 'total_saldo_akhir'));
    }
}   

