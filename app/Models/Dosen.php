<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'Dosen';

    protected $fillable = [
        'nip',
        'nama_dosen',
        'jenis_kelamin',
        'no_handphone',
        'alamat',
    ]
}
