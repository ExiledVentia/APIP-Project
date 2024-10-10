<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // untuk mengambil seluruh data kelas
        $kelas = kelas::all();
        // untuk merender view pada kelas
        return view('kelas/index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kelas::create([
            'kelas' => $request->kelas,
            'ruangan' => $request->ruangan,
            'lantai' => $request->lantai,
        ]);

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kelas $kelas)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas $kelas)
    {
        return view('kelas/ubah', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas $kelas)
    {
        $kelas->update($request->all());

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas $kelas)
    {
        
    }
}
