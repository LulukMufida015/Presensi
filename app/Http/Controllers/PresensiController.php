<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\jam;

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
        $posts = Presensi::orderBy('id', 'desc')->paginate(6);
        return view('presensi.index', compact('presensi'));
        with('i', (request()->input('page', 1) - 1) * 5);
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
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'mahasiswa_id' => 'required',
            'jadwal_id' => 'required',
            'status' => 'required',
        ]);
        
        Presensi::create($request->all());
        
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
