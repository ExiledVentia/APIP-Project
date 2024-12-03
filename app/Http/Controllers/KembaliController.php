<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use App\Models\pengembalian;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Time;
use RealRashid\SweetAlert\Facades\Alert;

class KembaliController extends Controller
{
    public function index()
    {
                $pengembalian = DB::table('peminjamans')
                ->rightJoin ('pengembalians', 'peminjamans.id', '=', 'pengembalians.id_pinjam')
                ->rightJoin ('barangs', 'barangs.id', '=', 'peminjamans.id_barang')
                ->select ('peminjamans.*', 'pengembalians.*', 'barangs.*')
                ->get();
    
            return view('kembali.index', compact('pengembalian'));
    }

    public function store(Request $request) {
         //dd($request->all());
        $request->validate([
            'id_pinjam' => 'required',
            'foto' => ['required', 'image'],
        ]);
    
        // Menyimpan file ke direktori yang diinginkan
        $imageName = null;
        if($request->foto) {
            $imageName = time().'.'.$request->file('foto')->extension('jpg');
            $request->foto->storeAs('/img', $imageName); // Simpan di storage/public/photos
        }
    
        pengembalian::create([
            'id_pinjam' => $request->id_pinjam,
            'foto' => $imageName, // Simpan nama file yang sudah diupload
            'tgl_kembali' => now(),
        ]);
    
        Alert::success('Data berhasil');
        return redirect('/');
    }

    // public function destroy(Pengembalian $kembali)
    // {
    //     $kembali = pengembalian::findOrFail($id);
    //     $kembali->delete();

    //     return redirect()->route('kembali.index2');
    // }
}