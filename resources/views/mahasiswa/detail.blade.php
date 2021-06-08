@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">detail mahasiswa</li>
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
                            <div class="card-header" style="text-align: center">
                            <img width="100px" height="100px" src="{{asset('storage/'.$mahasiswa->foto)}}">
                            </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Nim: </b>{{$mahasiswa->nim}}</li>
                                    <li class="list-group-item"><b>Nama: </b>{{$mahasiswa->nama}}</li>
                                    <li class="list-group-item"><b>Kelas: </b>{{$mahasiswa->kelas->nama_kelas}}</li>
                                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$mahasiswa->jenis_kelamin}}</li>
                                    <li class="list-group-item"><b>No_Handphone: </b>{{$mahasiswa->no_handphone}}</li>
                                    <li class="list-group-item"><b>Alamat: </b>{{$mahasiswa->alamat}}</li>
                                    </ul>
                                </div>
                                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
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
