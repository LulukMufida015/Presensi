@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tabel Daftar Matakuliah</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tabel Matakuliah</li>
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
                    <div class="card-header">
                        <a class="btn btn-success" href="{{ route('matakuliah.create') }}"> Input Matakuliah</a>
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 400px;">
                      <table class="table table-head-fixed text-nowrap">
                        <thead>
                          <tr>
                            <th>Nama Matakuliah</th>
                            <th>SKS</th>
                            <th>Jam</th>
                            <th>Nama Dosen</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($matakuliah as $mk)
                            <tr>
                                <td>{{ $mk->nama_matakuliah }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>{{ $mk->jam }}</td>
                                <td>{{ $mk->dosen->nama_dosen }}</td>
                                <td>
                                <form action="{{ route('matakuliah.destroy',['matakuliah'=>$mk->id]) }}" method="POST">
                                {{-- <a class="btn btn-info" href="{{ route('dosen.show',['mahasiswa'=>$dsn->nim]) }}">Show</a> --}}
                                <a class="btn btn-primary" href="{{ route('matakuliah.edit',['matakuliah'=>$mk->id]) }}">Edit</a>
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
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