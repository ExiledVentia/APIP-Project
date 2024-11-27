<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use App\Models\pengembalian;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KembaliController extends Controller
{
    public function index()
    {
        $pengembalian = DB::table('pengembalian')
        ->LeftJoin ('peminjaman', 'pengembalian.id_pinjam', '=', 'peminjaman.id')
        ->select ('pengembalian.*', 'peminjaman.id_user', 'peminjaman.id_barang')
        ->orderBy('pengembalian.created_at', 'desc')
        ->get();
        
        return view('kembali.index', compact('pengembalian'));
    }
}
