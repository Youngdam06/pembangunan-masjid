<?php

namespace App\Http\Controllers;
use App\Models\Keuangan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    	$pemasukans = Pemasukan::all();
        $pengeluarans = Pengeluaran::all();
    
    	return view('total.total', ['pemasukan' => $pemasukans], ['pengeluaran' => $pengeluarans]);
    }

    public function tampilBulan() 
    {
        return view('bulanan.layouttabelbulan');
    }
}