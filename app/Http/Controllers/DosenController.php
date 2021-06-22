<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
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
        $Dosen = Dosen::all(); // Mengambil semua isi tabel
        $posts = Dosen::orderBy('nip', 'desc')->paginate(6);
        return view('dosen.index', compact('Dosen'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
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
            'nip' => 'required',
            'nama_dosen' => 'required',
            'foto' => 'required',
            'jenis_kelamin' => 'required',
            'no_handphone' => 'required',
            'alamat' => 'required',
            ]);
            $image = $request->file('foto');
            if ($image) {
                $image_name = $request->file('foto')->store('images', 'public');
            }
            // dd($request->all());
            $dosen = new Dosen;
            $dosen->nip = $request->get('nip');
            $dosen->nama_dosen = $request->get('nama_dosen');
            $dosen->foto = $image_name;
            $dosen->jenis_kelamin = $request->get('jenis_kelamin');
            $dosen->no_handphone = $request->get('no_handphone');
            $dosen->alamat = $request->get('alamat');
            $dosen->save();
        
            return redirect()->route('dosen.index')
        ->with('success', 'Dosen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('dosen.detail', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource..
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit',  compact('dosen'));
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
        // $request->validate([
        //     'nip' => 'required',
        //     'nama_dosen' => 'required',
        //     'foto' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'no_handphone' => 'required',
        //     'alamat' => 'required',
        //     ]);
        // dd($request->all());
            $dosen = Dosen::find($id);
            if ($dosen->foto && file_exists(storage_path('app/public/' . $dosen->foto))) {
                \Storage::delete('public/' . $dosen->foto);
            }
            if($request->file('foto')!=null){
                $image_name = $request->file('foto')->store('images', 'public');
                $mahasiswa->foto = $image_name;
            }
            $dosen->nip = $request->get('nip');
            $dosen->nama_dosen = $request->get('nama_dosen');
            $dosen->jenis_kelamin = $request->get('jenis_kelamin');
            $dosen->no_handphone = $request->get('no_handphone');
            $dosen->alamat = $request->get('alamat');
            $dosen->save();
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('dosen.index')
        ->with('success', 'Dosen Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')
        -> with('success', 'Data dosen Berhasil Dihapus');
    }
}
