<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jadwal;
use App\Models\Presensi;
use Auth;
use Illuminate\Http\Request;
use PDF;

class LaporanAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexLaporan()
    {
        $presensi = Presensi::with('jadwal', 'mahasiswa')->get();
        //$posts = Presensi::orderBy('id', 'desc')->paginate(6);
        return view('page.laporan', compact('presensi'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function cetak_pdf()
    {
        $cetak_absensi = Presensi::all();
        $mhs = Mahasiswa::all();
        $pdf = PDF::loadview('page.cetak_pdf', ['presensi' => $cetak_absensi, 'mhs' => $mhs]);
        return $pdf->stream();
    }
    
}
