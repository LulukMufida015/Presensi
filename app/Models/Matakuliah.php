<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dosen;
use Illuminate\Foundation\Auth\Matakuliah as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';

    protected $fillable = [
        'nama_matakuliah',
        'sks',
        'jam',
        'id_dosen',
    ];
    
    public function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id');
    }
    
}
