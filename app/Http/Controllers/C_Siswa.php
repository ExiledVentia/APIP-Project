<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class C_Siswa extends Controller
{
    public function index(){
        // untuk mengambil seluruh data siswa
        $siswa = siswa::all();
        // untuk merender view pada siswa
        return view('siswa/index', compact('siswa'));
    }
    public function tambah(){
        return view('siswa/tambah');
}

    public function store(Request $request){
        Siswa::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()->route('siswa');
    }

    public function ubah(String $id) {
        $siswa = Siswa::find($id);
        
        return view('siswa/ubah', compact('siswa'));
    }

    public function update(Request $request, String $id) {
        $siswa = Siswa::findOrfail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa');
    }

    public function delete(String $id) {
        $siswa = Siswa::findOrfail($id);
        $siswa->delete();

        return redirect()->route('siswa');
    }

}