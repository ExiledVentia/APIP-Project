<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamUserController extends Controller
{
    
    public function index() {
        $peminjaman = DB::table('peminjamans')
        ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id')
        ->select('peminjamans.*', 'barangs.nama_barang',)
        ->get();
        return view('peminjaman.index1', compact('peminjaman'));
    }
    

    
}