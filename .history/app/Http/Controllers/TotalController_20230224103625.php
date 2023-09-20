<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    //
    public function tampilPertanggal($tglawal, $tglakhir)
    {
        // dd($tglawal,  $tglakhir);
        $tot = Pemasukan::with('tanggal')->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('total.cetak-total', compact('tot'));
    }
}
