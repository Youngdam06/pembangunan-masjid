<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TotalController extends Controller
{
    //
    public function tampilPertanggal($tglawal, $tglakhir)
    {
        // dd($tglawal,  $tglakhir);
        $tglawal = get('tanggal');
        $tot = Pemasukan::where('id')->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('total.cetak-total', compact('tot'));
    }
}
