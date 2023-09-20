<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluarans = Pengeluaran::latest()->paginate(10);
        return view('pengeluarans/laporanpengeluarans', compact('pengeluarans'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluarans/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required',

        ]);

        Pengeluaran::create($request->all());

        return redirect()->route('pengeluarans.index')
            ->with('success', 'pengeluaran created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //sdas
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        return view('pengeluarans/edit', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     * ima kill this guy maderfaker hahahahahahahahahahahaha
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengeluaran $pengeluarans)
    {
        $request->validate([
            'keterangan' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required',
            'pemasukans_Id' => 'required'

        ]);

        $pengeluarans->update($request->all());

        return redirect()->route('pengeluarans.index')
            ->with('success', 'pengeluaran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();

        return redirect()->route('pengeluarans.index')
            ->with('success', 'Pemasukan deleted successfully');
    }
    public function tambah()
    {
        $saldo = Pemasukan::sum('saldo');
        $tanggals = Pemasukan::all('tanggal');
        $nominal = Pengeluaran::sum('nominal');
        $total = ($saldo - $nominal);

        $tanggal = [''];
        return view('total.total', compact('saldo', 'nominal', 'tanggals', 'total'));
    }
    public function showTanggal()
    {
        $tanggal = Pengeluaran::with(['tanggal'])->get();
        return view('total', ['totalTanggal' => $tanggal]);
    }
}
