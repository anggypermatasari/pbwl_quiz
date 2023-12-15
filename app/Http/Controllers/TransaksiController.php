<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Mhsw;
use App\Models\Buku;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mhsw = Mhsw::all();
        $buku = Buku::all();
        return view('transaksi.create', compact('mhsw','buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'id_transaksi'      => $request->id_transaksi,
            'mahsiswa_id'       => $request->mahsiswa_id,
            'id_buku'           => $request->id_buku,
            'tanggal_pinjam'    => $request->tanggal_pinjam,
            'tanggal_kembali'   => $request->tanggal_kembali

        ]);
        return redirect ('transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row  = Transaksi::find($id);
        $mhsw = Mhsw::all();
        $buku = Buku::all();
        return view('transaksi.edit', compact('row','mhsw','buku'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update (Request $request, string $id)
    {
        $row =Transaksi::findOrFail($id);

        $row->update([
            'id_transaksi'      => $request->id_transaksi,
            'mahsiswa_id'       => $request->mahsiswa_id,
            'id_buku'           => $request->id_buku,
            'tanggal_pinjam'    => $request->tanggal_pinjam,
            'tanggal_kembali'   => $request->tanggal_kembali
        ]);
            return redirect ('transaksi');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row =Transaksi::findOrFail($id);

        $row->delete();

        return redirect ('transaksi');
    }
}