@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Presensi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('jadwal.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">edit presensi</li>
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
                        <form method="post" action="{{ route('presensi.update', $presensi->id) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group"> 
                                    <label for="nama">Nama Mahasiswa</label>
                                    <select class="form-control" name="mahasiswa_id" id="nama" value="{{$presensi->mahasiswa->nama}}">
                                        @foreach($mahasiswa as $mhs)
                                        <option value="{{$mhs->id}}">{{$mhs->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"> 
                                    <label for="jadwal_id">Id Jadwal</label>
                                    <select class="form-control" name="jadwal_id" id="jadwal" value="{{$presensi->jadwal_id}}">
                                        @foreach($jadwal as $jdw)
                                        <option value="{{$jdw->id}}">{{$jdw->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"> 
                                    <label for="status">Jam ke</label>
                                    <select class="form-control" name="status" id="status" value="{{$presensi->status}}">
                                        <option type="radio" value="Present">Present</option>
                                        <option type="radio" value="Excused">Excused</option>
                                        <option type="radio" value="Absent">Absent</option>
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
