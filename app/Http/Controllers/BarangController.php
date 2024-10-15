<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barangs::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nama_barang' => 'required',
        'kategori' => 'required',
        'ruangan' => 'required',
        'tahun_masuk' => 'required|date',
        'sumber_dana' => 'required',
        'no_barang' => 'required',
    ]);

    Barangs::create([
        'nama_barang' => $request->nama_barang,
        'kategori' => $request->kategori,
        'ruangan' => $request->ruangan,
        'tahun_masuk' => $request->tahun_masuk,
        'sumber_dana' => $request->sumber_dana,
        'no_barang' => $request->no_barang,
    ]);

        return redirect()->route('barang.index');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barangs::find($id);
        
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barangs::findOrfail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barangs::findOrfail($id);
        $barang->delete();

        return redirect()->route('barang.index');
    }
}
