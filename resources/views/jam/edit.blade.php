@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Jam</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('jam.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">edit jam</li>
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
                        <form method="post" action="{{ route('jam.update', $jam->id) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" id="Nama"
                                        placeholder="Nama" value="{{ $jam->nama }}" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="Mulai">Mulai</label>
                                    <input type="text" class="form-control" id="Mulai"
                                        placeholder="Mulai" value="{{ $jam->mulai }}" name="mulai">
                                </div>
                                <div class="form-group">
                                    <label for="Selesai">Selesai</label>
                                    <input type="text" class="form-control" id="Selesai"
                                        placeholder="Selesai" value="{{ $jam->selesai }}" name="selesai">
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
