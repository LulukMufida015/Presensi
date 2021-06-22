<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Presensi;
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
        $presensi = Presensi::with('jadwal', 'mahasiswa')->get();
        //$posts = Presensi::orderBy('id', 'desc')->paginate(6);
        return view('NotAdmin.laporan', compact('presensi'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function cetak_pdf()
    {
        $cetak_absensi = Presensi::all();
        $mhs = Mahasiswa::where('id_user', Auth::user()->id)->first();
        $pdf = PDF::loadview('NotAdmin.cetak_pdf', ['presensi' => $cetak_absensi, 'mhs' => $mhs]);
        return $pdf->stream();
    }
}
