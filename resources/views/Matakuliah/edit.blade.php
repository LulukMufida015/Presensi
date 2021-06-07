@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Matakuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dosen</a></li>
                        <li class="breadcrumb-item active">edit matakuliah</li>
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
                        <form method="post" action="{{ route('matakuliah.update', $matakuliah->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_matakuliah">Nama Matakuliah</label>
                                    <input type="text" class="form-control" id="Nama"
                                        placeholder="Nama" value="{{ $matakuliah->nama_matakuliah }}" name="nama_matakuliah">
                                </div>
                                <div class="form-group">
                                    <label for="sks">SKS</label>
                                    <input type="number" class="form-control" id="sks"
                                        placeholder="sks" value="{{ $matakuliah->sks }}" name="sks">
                                </div>
                                <div class="form-group">
                                    <label for="jam">Jam</label>
                                    <input type="number" class="form-control" id="jam"
                                        placeholder="jam" value="{{ $matakuliah->jam }}" name="jam">
                                </div>
                                <div class="form-group">
                                    <label for="Dosen_id">Dosen Id</label>
                                    <input type="text" class="form-control" id="Dosen_id"
                                        placeholder="Dosen_id" value="{{ $matakuliah->Dosen_id }}" name="Dosen_id">
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