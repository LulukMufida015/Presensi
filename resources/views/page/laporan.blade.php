@extends('layout/master')
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
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Matakuliah</th>
                            <th>Status</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($presensi as $prs)
                            <tr>
                                <td>{{ $prs->mahasiswa->nim }}</td>
                                <td>{{ $prs->mahasiswa->nama }}</td>
                                <td>{{ $prs->jadwal->dosen->matakuliah->nama_matakuliah }}</td>
                                <td>{{ $prs->status}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    {{-- <a class="btn btn-block btn-primary" href="{{url('laporan/admin/cetak_pdf')}}"> Cetak PDF</a> --}}
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
    </section>
</div>

@endsection