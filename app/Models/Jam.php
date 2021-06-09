<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;

class Jam extends Model
{
    use HasFactory;
    protected $table = 'jam';
    protected $fillable = [
        'nama',
        'mulai',
        'toleransi_waktu',
        'selesai',
        ];
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
