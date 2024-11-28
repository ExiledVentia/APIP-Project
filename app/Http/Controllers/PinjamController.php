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
}
