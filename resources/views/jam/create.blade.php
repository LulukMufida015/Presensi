@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Jam</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('jam.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">tambah jam</li>
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
                        <form method="post" action="{{ route('jam.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Jam">Nama</label>
                                    <input type="text" class="form-control" id="Nama"
                                        placeholder="Jam-ke" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="Mulai">Mulai</label>
                                    <input type="time" class="form-control" id="Mulai"
                                        placeholder="Mulai" name="mulai">
                                </div>
                                <div class="form-group">
                                    <label for="Selesai">Selesai</label>
                                    <input type="time" class="form-control" id="Selesai"
                                        placeholder="Selesai" name="selesai">
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
