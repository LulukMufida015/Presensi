<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table="mahasiswa";
    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'foto',
        'jenis_kelamin',
        'no_handphone',
        'alamat',
        ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
