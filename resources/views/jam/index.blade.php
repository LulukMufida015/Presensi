@extends('layout.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tabel Jam</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('jam.index') }}">Home</a></li>
                <li class="breadcrumb-item active">tabel jam</li>
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
                        <a class="btn btn-success" href="{{ route('jam.create') }}"> Input Jam</a>
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default" >
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
                            <th>Nama</th>
                            <th>Mulai</th>
                            <th>Toleransi Waktu</th>
                            <th>Selesai</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($jam as $jm)
                          <tr>
                              <td>{{ $jm->nama }}</td>
                              <td>{{ $jm->mulai }}</td>
                              <td>{{ $jm->toleransi_waktu }}</td>
                              <td>{{ $jm->selesai }}</td>
                              <td>
                              <form action="{{ route('jam.destroy', $jm->id) }}" method="POST">
                              <a class="btn btn-primary" href="{{ route('jam.edit',$jm->id) }}">Edit</a>
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
