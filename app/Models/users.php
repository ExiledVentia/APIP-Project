<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'username',
        'password',
        'alamat',
        'jk',
        'tgl_lahir',
    ];
}


