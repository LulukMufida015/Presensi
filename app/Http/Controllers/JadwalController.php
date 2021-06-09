<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Jam;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JadwalController extends Controller
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
        $jadwal = Jadwal::with('dosen', 'kelas', 'jam')->get();
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $dosen = Dosen::all();
        $kelas = Kelas::all();
        $jam = Jam::all();
        return view('jadwal.create', compact('dosen', 'kelas', 'jam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'dosen_id' => 'required',
            'kelas_id' => 'required',
            'jam_id' => 'required',
        ]);
        Jadwal::create($request->all());
        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.detail', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::all();
        $kelas = Kelas::all();
        $jam = Jam::all();
        $jadwal = Jadwal::find($id);
        return view('jadwal.edit', compact('dosen', 'kelas', 'jam', 'jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'dosen_id' => 'required',
            'kelas_id' => 'required',
            'jam_id' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Jadwal::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal::find($id)->delete();
        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal Berhasil Dihapus');
    }
}
