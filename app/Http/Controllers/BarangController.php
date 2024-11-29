<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
        * Retrieve all records of Barangs from the database.
        */
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

    public function store(Request $request)
    {
    $request->validate([
    /**
    * Validates the request data.
    */
        'nama_barang' => 'required',
        'kategori' => 'required',
        'ruangan' => 'required',
        'tahun_masuk' => 'required|date',
        'sumber_dana' => 'required',
        'no_barang' => 'required',
        'kode_barang' => 'required',
    ]);
    /** 
     * Stores the record
     */
    Barangs::create([
        'nama_barang' => $request->nama_barang,
        'kategori' => $request->kategori,
        'ruangan' => $request->ruangan,
        'tahun_masuk' => $request->tahun_masuk,
        'sumber_dana' => $request->sumber_dana,
        'no_barang' => $request->no_barang,
        'kode_barang' => $request->kode_barang,
    ]);
    
        Alert::success( 'Data berhasil ditambahkan');
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
        /**
         * Find a specific 'Barang' by its ID or fail if not found.
         */
        $barang = Barangs::findOrfail($id);
        $barang->update($request->all());
        Alert::success( 'Data berhasil diubah');
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

    public function search(Request $request)
    {
        // Query dari request
        $query = $request->input('query');

        // Cari data berdasarkan query
        $barang = Barangs::where('nama_barang', 'like', "%$query%")
        ->orWhere('kategori', 'like', "%$query%")
        ->orWhere('kode_barang', 'like', "%$query%")
        ->get();
        
        // Tampilkan hasil pencarian
        return view('barang.index', ['barang' => $barang]);
    }
}
