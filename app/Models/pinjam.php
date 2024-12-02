<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;

    protected $table = 'peminjamans';
    protected $fillable = [
        'email',
        'nama_peminjam',
        'id_barang',
        'no_telp',
        'peminjam',
        'keperluan',
        'tgl_pinjam',
        'dari',
        'sampai',


    ];
}
