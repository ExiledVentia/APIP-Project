<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalians';
    protected $fillable = [
        'id_pinjam',
        'tgl_kembali',
        'foto',
    ];
}
