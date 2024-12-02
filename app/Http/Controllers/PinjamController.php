<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PinjamController extends Controller
{
    public function index() {
        $peminjaman = DB::table('barangs')
        ->get();
        // BARU INI YAH... MASIH BELAJAR SOALNY BUAT PENGGUNA BUKAN ADMIN
        return view('peminjaman.index', compact('peminjaman'));
    }
    public function show() {
    }

    public function create() {
        return view('peminjaman.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'id_barang' => 'required',
            'email' => 'required',
            'tgl_pinjam' => 'required',
            'nama_peminjam' => 'required',
            'no_telp' => 'required',
            'peminjam' => 'required',
            'keperluan' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
        ]);
        pinjam::create([
            'id_barang' => $request->id_barang,
            'email' => $request->email,
            'tgl_pinjam' => $request->tgl_pinjam,
            'nama_peminjam' => $request->nama_peminjam,
            'no_telp' => $request->no_telp,
            'peminjam' => $request->peminjam,
            'keperluan' => $request->keperluan,
            'dari' => $request->dari,
            'sampai' => $request->sampai,

        ]);
        Alert::success( 'Data berhasil ditambahkan');
        return view('/dashboard');
    }

}
