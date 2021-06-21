<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $profile = Mahasiswa::where('id_user', $id)->first(); // Mengambil semua isi tabel
        return view('NotAdmin.mahasiswa', compact('profile'));
    }
}
