<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
{
    public function index() {
        $peminjaman = DB::table('peminjamans')
        ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id')
        ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
        ->select('peminjamans.*', 'barangs.nama_barang', 'users.nama')
        ->get();
        // BARU INI YAH... MASIH BELAJAR SOALNY 
        return view('peminjaman.index1', compact('peminjaman'));
    }
    public function show() {
    
    }

    public function create() {
        return view('peminjaman.create');
    }

    public function store(Request $request) {
        $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
        ]);
        pinjam::create([
            'id_user' => $request->id_user,
            'id_barang' => $request->id_barang,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);
        return redirect()->route('peminjaman.index');
        //test doang asli gw belum tau bisa ato engga
    }
}
