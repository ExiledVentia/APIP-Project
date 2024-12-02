<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use App\Models\pengembalian;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KembaliController extends Controller
{
    public function index()
    {
        $pengembalian = DB::table('pengembalians')
        ->LeftJoin ('peminjamans', 'pengembalians.id_pinjam', '=', 'peminjamans.id')
        ->select ('pengembalians.*', 'peminjamans.*',)
        ->orderBy('pengembalians.created_at', 'desc')
        ->get();
        
        return view('kembali.index', compact('pengembalian'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'id_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'foto' => 'required',
        ]);

        pinjam::create([
            'id_pinjam' => $request->id_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'foto' => $request->foto,
        ]);
        Alert::success( 'Data berhasil ');
        return view('/dashboard');

}
}