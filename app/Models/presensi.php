<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Jadwal;

class presensi extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    protected $fillable = [
        'mahasiswa_id',
        'jadwal_id',
        'status',
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
