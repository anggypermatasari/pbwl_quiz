<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Buku::all();
        return view('buku.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Buku ::create([
            'buku_nama'      => $request->buku_nama,
            'buku_pengarang' => $request->buku_pengarang,
            'buku_sinopsis'  => $request->buku_sinopsis
        ]);
        return redirect ('buku');
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
        $row = Buku::find($id);
        return view('buku.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row =Buku::findOrFail($id);

        $row->update([
            'buku_nama'      => $request->buku_nama,
            'buku_pengarang' => $request->buku_pengarang,
            'buku_sinopsis'  => $request->buku_sinopsis
        ]);
        return redirect ('buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row =Buku::findOrFail($id);

        $row->delete();

        return redirect ('buku');
    }
}
