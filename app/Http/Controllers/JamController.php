<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use Illuminate\Http\Request;

class JamController extends Controller
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
        //fungsi eloquent menampilkan data menggunakan pagination
        $jam = Jam::all(); // Mengambil semua isi tabel
        return view('jam.index', compact('jam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jam.create');
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
            'nama' => 'required',
            'mulai' => 'required',
            'toleransi_waktu' => 'required',
            'selesai' => 'required',
        ]);
        Jam::create($request->all());
        return redirect()->route('jam.index')
            ->with('success', 'Jam Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function show(Jam $jam)
    {
        $jam = Jam::find($id);
        return view('jam.detail', compact('jam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jam = Jam::find($id);
        return view('jam.edit', compact('jam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'mulai' => 'required',
            'toleransi_waktu' => 'required',
            'selesai' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Jam::find($id)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('jam.index')
            ->with('success', 'Jam Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jam::find($id)->delete();
        return redirect()->route('jam.index')
        -> with('success', 'Jam Berhasil Dihapus');
    }
}
