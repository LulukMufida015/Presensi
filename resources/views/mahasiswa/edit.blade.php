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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="NIM">NIM</label>
                                    <input type="text" class="form-control" id="NIM"
                                        placeholder="NIM" value="{{ $mahasiswa->nim }}" name="nim">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" id="Nama"
                                        placeholder="Nama" value="{{ $mahasiswa->nama }}" name="nama">
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
                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div> --}}
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
