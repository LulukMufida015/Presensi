@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail Presensi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">detail Presensi</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="container mt-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="card" style="width: 30rem;">
                            
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Id Presensi: </b>{{$presensi->id}}</li>
                                    <li class="list-group-item"><b>NIM: </b>{{$presensi->mahasiswa->nim}}</li>
                                    <li class="list-group-item"><b>Nama: </b>{{$presensi->mahasiswa->nama}}</li>
                                    <li class="list-group-item"><b>Matakuliah: </b>{{$presensi->jadwal->dosen->nama_dosen}}</li>
                                    <li class="list-group-item"><b>Waktu: </b>jam ke- {{$presensi->jadwal->jam->nama}}</li>
                                    <li class="list-group-item"><b>Status: </b>{{$presensi->status}}</li>
                                    
                                    </ul>
                                </div>
                                <a class="btn btn-success mt-3" href="{{ route('presensi.index') }}">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
    </section>
</div>
@endsection
