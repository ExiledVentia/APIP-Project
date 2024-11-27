<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'barangs';
    protected $fillable = [
        'nama_barang',
        'kategori',
        'ruangan',
        'tahun_masuk',
        'sumber_dana',
        'no_barang',
        'kode_barang',
    ];
}
