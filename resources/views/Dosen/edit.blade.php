@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dosen</a></li>
                        <li class="breadcrumb-item active">edit dosen</li>
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
                        <form method="post" action="{{ route('dosen.update', $dosen->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="NIP">NIP</label>
                                    <input type="text" class="form-control" id="NIP"
                                        placeholder="NIP" value="{{ $dosen->nip }}" name="nip">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" id="Nama"
                                        placeholder="Nama" value="{{ $dosen->nama_dosen }}" name="nama_dosen">
                                </div>
                                <div class="form-group">
                                    <label for="Jenis-Kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="Jenis-Kelamin"
                                        placeholder="Jenis-Kelamin" value="{{ $dosen->jenis_kelamin }}" name="jenis_kelamin">
                                </div>
                                <div class="form-group">
                                    <label for="No-Handphone">No Handphone</label>
                                    <input type="text" class="form-control" id="No-Handphone"
                                        placeholder="No-Handphone" value="{{ $dosen->no_handphone }}" name="no_handphone">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat"
                                        placeholder="Alamat" value="{{ $dosen->alamat }}" name="alamat">
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