<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Jam;
use App\Models\Kelas;
use App\Models\Presensi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
        'dosen_id',
        'kelas_id',
        'jam_id',
    ];
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function Jam()
    {
        return $this->belongsTo(Jam::class);
    }
    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }
}
