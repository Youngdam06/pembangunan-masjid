<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    //
    public function index()
    {
        $tabungan = Tabungan::get();
        return view('tabungan.isi-saldo', compact('tabungan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabungan $tabungan)
    {
        return view('tabungan/editsaldo', compact('tabung'));
    }
}
