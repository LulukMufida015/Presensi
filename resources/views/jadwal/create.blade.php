@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Jadwal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('jadwal.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">tambah jadwal</li>
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
                        <form method="post" action="{{ route('jadwal.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group"> 
                                    <label for="nama-dosen">Nama Dosen</label>
                                    <select class="form-control" name="dosen_id" id="nama-dosen">
                                        @foreach($dosen as $dsn)
                                        <option value="{{$dsn->id}}">{{$dsn->nama_dosen}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"> 
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" name="kelas_id" id="kelas">
                                        @foreach($kelas as $kls)
                                        <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"> 
                                    <label for="jam-ke">Jam ke</label>
                                    <select class="form-control" name="jam_id" id="jam-ke">
                                        @foreach($jam as $jm)
                                        <option value="{{$jm->id}}">{{$jm->nama}}</option>
                                        @endforeach
                                    </select>
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
