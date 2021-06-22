<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Presensi;
use App\Models\Kelas;
use Auth;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $mhs = Mahasiswa::where('id_user', Auth::user()->id)->first();
        $presensi = Presensi::where('mahasiswa_id', $mhs->id)->get();
        return view('NotAdmin.laporan', compact('presensi'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function cetak_pdf()
    {
        // $cetak_absensi = Presensi::all();
        $kelas = Kelas::all();
        $mhs = Mahasiswa::where('id_user', Auth::user()->id)->first();
        $cetak_absensi = Presensi::where('mahasiswa_id', $mhs->id)->get();
        $pdf = PDF::loadview('NotAdmin.cetak_pdf', ['presensi' => $cetak_absensi, 'mhs' => $mhs, 'kelas' => $kelas]);
        return $pdf->stream();
    }
}
