<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matakuliah;

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
    ];
    public function matakuliah()
    {
        return $this->hasOne(Matakuliah::class);
    }
}
