<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    # Defines the fillable attributes for the 'siswa' model.
    public $fillable = [ 'nama','jk','kelas','jurusan','angkatan'];
    
}
