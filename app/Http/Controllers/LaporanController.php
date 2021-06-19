<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\jam;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $presensi = Presensi::with('jadwal', 'mahasiswa')->get();
        $posts = Presensi::orderBy('id', 'desc')->paginate(6);
        return view('NotAdmin.laporan', compact('presensi'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }
}
