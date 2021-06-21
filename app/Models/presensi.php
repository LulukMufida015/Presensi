<?php

namespace App\Models;

use App\Models\Jadwal;
use App\Models\Mahasiswa;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    protected $fillable = [
        'mahasiswa_id',
        'jadwal_id',
        'status',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function cekAbsen($id_mahasiwa, $jadwalid)
    {
        $data = DB::table('presensi')->where('mahasiswa_id', $id_mahasiwa)->where('jadwal_id', $jadwalid)->first();
        if ($data) {
            return $arr = ['ada', $data];
        } else {
            return $arr = ['belum', $data = []];
        }
    }
}
