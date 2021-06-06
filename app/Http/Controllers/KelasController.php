<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //fungsi eloquent menampilkan data menggunakan pagination
         $kelas = Kelas::all(); // Mengambil semua isi tabel
         return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
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
            'nama_kelas' => 'required',
        ]);
        Kelas::create($request->all());
        return redirect()->route('kelass.index')
            ->with('success', 'Kelas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        $kelas = Kelas::find($id);
        return view('kelas.detail', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_kelas' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Kelas::find($id)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('kelass.index')
            ->with('success', 'Kelas Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect()->route('kelass.index')
        -> with('success', 'Kelas Berhasil Dihapus');
    }
}
