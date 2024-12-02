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
                $peminjaman= DB::table('peminjamans')
                ->LeftJoin ('barangs', 'peminjamans.id.barang', '=', 'barang.id')
                ->select ('peminjamans.*', 'barangs.*',)
                ->get();
    
            $peminjaman = Pinjam::all();
    
            return view('kembali.index', compact('peminjaman'));
    
    }

    public function store(Request $request) {
         dd($request->all());
        $request->validate([
            'id_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'foto' => ['required', 'image'],
        ]);
    
        // Menyimpan file ke direktori yang diinginkan
        $imageName = null;
        if($request->foto) {
            $imageName = time().'.'.$request->file('photos')->extension();
            $request->foto->storeAs('public/img', $imageName); // Simpan di storage/public/photos
        }
    
        pengembalian::create([
            'id_pinjam' => $request->id_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'foto' => $imageName, // Simpan nama file yang sudah diupload
        ]);
    
        Alert::success('Data berhasil');
        return redirect('/dashboard');
    }
}