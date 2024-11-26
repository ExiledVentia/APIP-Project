<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
{
    public function index() {
        $peminjaman = DB::table('peminjaman')
        ->leftJoin('barangs', 'peminjaman.id_barang', '=', 'barangs.id')
        ->leftJoin('users', 'peminjaman.id_user', '=', 'users.id')
        ->select('peminjaman.*', 'barangs.nama_barang', 'users.nama')
        ->get();
        // BARU INI YAH... MASIH BELAJAR SOALNY 
        return view('pinjam.index', compact('peminjaman'));
    }
}
