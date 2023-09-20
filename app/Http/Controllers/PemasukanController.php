<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $start_date = $request->input('tanggal_awal');
        $end_date = $request->input('tanggal_akhir');
    
        $pemasukans = Pemasukan::query();
    
        if ($start_date && $end_date) {
            $pemasukans = $pemasukans->whereBetween('tanggal', [$start_date, $end_date]);
        }

        $pemasukans = Pemasukan::latest()->paginate(15);
        return view('pemasukans/laporanpemasukans', compact('pemasukans'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasukans/create');
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
            'saldo' => 'required',

        ]);

        Pemasukan::create($request->all());

        return redirect()->route('pemasukans.index')
            ->with('success', 'Pemasukan created successfully.');
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
    public function edit(Pemasukan $pemasukan)
    {
        return view('pemasukans/edit', compact('pemasukan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemasukan $pemasukan)
    {
        $request->validate([
            'keterangan' => 'required',
            'tanggal' => 'required',
            'saldo' => 'required',
        ]);

        $pemasukan->update($request->all());

        return redirect()->route('pemasukans.index')
            ->with('success', 'Pemasukan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemasukan $pemasukan)
    {
        $pemasukan->delete();

        return redirect()->route('pemasukans.index')
            ->with('success', 'Pemasukan deleted successfully');
    }

    public function tambah()

    {
        $data = DB::table('pengeluarans')
            ->join('pemasukans', 'pemasukans.id', '=', 'pemasukans.id')
            ->get();
        return view('total.total')->with('data', $data);
    }
}
