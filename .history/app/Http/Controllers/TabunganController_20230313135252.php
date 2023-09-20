<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use lluminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TabunganController extends Controller
{
    //
    // index function
    public function index()
    {
        $tgl = Tabungan::get('tanggal');
        $tabungan = Tabungan::first()->paginate(10);
        return view('tabungan.isi-saldo', compact('tabungan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // edit function
    public function edit(Tabungan $tabungan)
    {
        return view('tabungan/inedit', compact('tabungan'));
    }

    // update function
    public function update(Request $request, Tabungan $tabungan)
    {
        $request->validate([
            'tanggal' => 'required',
            'uang' => 'required',
        ]);

        $tabungan->update($request->all());

        return redirect()->route('tabungans.index')
            ->with('success', 'saldo updated successfully');
    }

    // destroy function
    public function destroy(Tabungan $tabungan)
    {
        $tabungan->delete();

        return redirect()->route('tabungans.index')
            ->with('success', 'saldo deleted successfully');
    }
    // create function
    public function create()
    {
        return view('tabungan/increate');
    }

    // store function
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'uang' => 'required',
        ]);

        Tabungan::create($request->all());
        // dd($request);
        return redirect()->route('tabungans.index')
            ->with('success', 'saldo created successfully.');
    }
}
