<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'kategori',
        'ruangan',
        'tahun masuk',
        'sumber dana',
        'no_barang',
    ];
}
