<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = Matakuliah::with('dosen')->get(); // Mengambil semua isi tabel
        $posts = Matakuliah::orderBy('id', 'desc')->paginate(6);
        return view('matakuliah.index', compact('matakuliah'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('matakuliah.create', ['dosen' => $dosen]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required',
            'jam' => 'required',
            'id_dosen'=> 'required',
            ]);

            $matakuliah = new Matakuliah;
        $matakuliah->nama_matakuliah = $request->get('nama_matakuliah');
        $matakuliah->sks = $request->get('sks');
        $matakuliah->jam = $request->get('jam');
            $dosen = new Dosen;
            $dosen->id = $request->get('id_dosen');
            
        //fungsi eloquent untuk menambah data dengan relasi belongsTo
            $matakuliah->dosen()->associate($dosen);
            $matakuliah->save();


            return redirect()->route('matakuliah.index')
        ->with('success', 'Matakuliah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matakuliah = Matakuliah::with('dosen')->where('id', $id)->first();
        $dosen = Dosen::all(); 
        return view('matakuliah.edit', compact('matakuliah','dosen'));
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
            'nama_matakuliah' => 'required',
            'sks' => 'required',
            'jam' => 'required',
            'id_dosen'=> 'required',
            ]);


            $matakuliah = Matakuliah::with('dosen')->where('id', $id)->first();
            $matakuliah->nama_matakuliah = $request->get('nama_matakuliah');
        $matakuliah->sks = $request->get('sks');
        $matakuliah->jam = $request->get('jam');
            $dosen = new Dosen;
            $dosen->id = $request->get('id_dosen');
            $matakuliah->dosen()->associate($dosen);
            $matakuliah->save();

        // Matakuliah::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('matakuliah.index')
        ->with('success', 'Matakuliah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')
        -> with('success', 'matakuliah Berhasil Dihapus');
    }
}
