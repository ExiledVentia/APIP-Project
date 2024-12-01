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
        $pengembalian = DB::table('pengembalians')
        ->LeftJoin ('peminjamans', 'pengembalians.id_pinjam', '=', 'peminjamans.id')
        ->select ('pengembalians.*', 'peminjamans.id_user', 'peminjamans.id_barang')
        ->orderBy('pengembalians.created_at', 'desc')
        ->get();
        
        return view('kembali.index', compact('pengembalian'));
    }
}
