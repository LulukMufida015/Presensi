<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\jam;
use App\Models\Mahasiswa;
use App\Models\Presensi;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $presensi = Presensi::with('jadwal', 'mahasiswa')->get();
        $idjadwal = 0;
        $mahasiswa = Mahasiswa::where('id_user', Auth::user()->id)->first();
        $jadwal = Jadwal::with('kelas', 'jam', 'presensi')->where('kelas_id', $mahasiswa->kelas->id)->get();
        //return $jadwal;
        $mahasiswaid = $mahasiswa->id;
        $check = Presensi::where('mahasiswa_id', $mahasiswa->id)->first();
        $timetoabsen = 'none';
        if ($check) {
            $timetoabsen = Carbon::parse($check->created_at)->format('Y-m-d');
        }
        $now = Carbon::now()->format('Y-m-d');
        $hasabsen = 0;
        if ($timetoabsen == $now) {
            $hasabsen = 1;
        }
        //return $check;
        return view('presensi.index', compact('presensi', 'check', 'hasabsen', 'jadwal', 'mahasiswaid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $jadwal = Jadwal::all();

        return view('presensi.create', compact('jadwal', 'mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($jadwal_id)
    {

        $mahasiswa = Mahasiswa::with('kelas')->where('id_user', Auth::user()->id)->first();
        // dd($mahasiswa->kelas->id);
        $jadwal = Jadwal::with('kelas')->where('id', $jadwal_id)->first();
        if (date('H:i:s') <= $jadwal->jam->toleransi_waktu) {
            $status = 'Masuk';
        } else {
            $status = 'Telat';
        }
        Presensi::create([
            'mahasiswa_id' => $mahasiswa->id,
            'jadwal_id' => $jadwal->id,
            'status' => $status,
        ]);

        return redirect()->route('presensi.index')
            ->with('success', 'presensi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Presensi $presensi)
    {
        $mahasiswa = Mahasiswa::all();
        $jadwal = Jadwal::all();
        $dosen = Dosen::all();
        $jam = Jam::all();
        return view('presensi.detail', compact('presensi', 'jadwal', 'mahasiswa', 'dosen', 'jam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $jadwal = Jadwal::all();
        $presensi = Presensi::find($id);
        return view('presensi.edit', compact('mahasiswa', 'jadwal', 'presensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'jadwal_id' => 'required',
            'status' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Presensi::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('presensi.index')
            ->with('success', 'Presensi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Presensi::find($id)->delete();
        return redirect()->route('presensi.index')
            ->with('success', 'Presensi Berhasil Dihapus');
    }
}
