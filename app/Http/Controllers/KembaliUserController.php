<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pengembalian;

class KembaliUserController extends Controller
{
    public function index() {
        $pengembalian = DB::table('pengembalians')
        ->LeftJoin ('peminjamans', 'peminjamans.id', '=', 'pengembalians.id_pinjam')
        ->LeftJoin ('barangs', 'barangs.id', '=', 'peminjamans.id_barang')
        ->select ('peminjamans.*', 'pengembalians.*', 'barangs.*')
        ->get();
        return view('kembali.index2', compact('pengembalian'));
    }

    // public function destroy($id)
    // {
    //     $pengembalian = Pengembalian::find($id);
    //     $pengembalian->delete();

    //     return redirect()->route('kembali.index2');
    // }
}
