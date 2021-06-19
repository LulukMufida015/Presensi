@extends('NotAdmin/master2')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tabel Daftar Presensi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tabel Presensi</li>
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
                            <th>Id</th>
                            <th>Nama Mahasiswa</th>
                            <th>Id Jadwal</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($presensi as $prs)
                            <tr>
                                <td>{{ $prs->id }}</td>
                                <td>{{ $prs->mahasiswa->nama_kelas }}</td>
                                <td>{{ $prs->jadwal_id }}</td>
                                <td>{{ $prs->status}}</td>
                                <td>
                                <form action="{{ route('presensi.destroy',['presensi'=>$prs->id]) }}" method="POST">
                                  <a class="btn btn-success" href="{{ route('presensi.create',['presensi'=>$prs->id]) }}"> Submit </a>
                                  <a class="btn btn-info" href="{{ route('presensi.show',['presensi'=>$prs->id]) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('presensi.edit',['presensi'=>$prs->id]) }}">Edit</a>
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