@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('mahasiswa.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">edit mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control" id="nim"
                                        placeholder="NIM" value="{{ $mahasiswa->nim }}" name="nim">
                                </div>
                                <div class="form-group">
                                    <label for="Foto">Nama</label>
                                    <input type="text" class="form-control" id="Nama"
                                        placeholder="Nama" value="{{ $mahasiswa->nama }}" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="Foto">Foto</label>
                                    <input type="file" class="form-control" id="Foto"
                                        placeholder="Foto" value="{{ $mahasiswa->foto }}" name="foto">
                                        <br>
                                        <img width="150px" src="{{asset('storage/'.$mahasiswa->foto)}}">
                                </div>
                                <div class="form-group">
                                    <label for="Jenis-Kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="Jenis-Kelamin"
                                        placeholder="Jenis-Kelamin" value="{{ $mahasiswa->jenis_kelamin }}" name="jenis_kelamin">
                                </div>
                                <div class="form-group">
                                    <label for="No-Handphone">No Handphone</label>
                                    <input type="text" class="form-control" id="No-Handphone"
                                        placeholder="No-Handphone" value="{{ $mahasiswa->no_handphone }}" name="no_handphone">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat"
                                        placeholder="Alamat" value="{{ $mahasiswa->alamat }}" name="alamat">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    @endsection
