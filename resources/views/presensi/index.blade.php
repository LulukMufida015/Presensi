@extends('layout/Master2')
@section('content')
@php $model = new App\Models\Presensi() @endphp
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
                      @if ($hasabsen == 0)
                        <a class="btn btn-success" href="{{ route('presensi.store') }}"> Absen </a>
                      @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 400px;">
                     
                      <table class="table table-head-fixed text-nowrap">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Jadwal</th>
                            <th>Batas Absen</th>
                            <th>Jam Absen</th>
                            <th>Tanggal Absen</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $key => $prs)
                            @php $cek = $model->cekAbsen($mahasiswaid,$prs->id) @endphp
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $prs->jam->nama }}</td>
                                <td>{{ $prs->jam->mulai }}</td>
                                @if($cek[0] == 'ada')
                                <td>{{\Carbon\Carbon::parse($cek[1]->created_at)->format('H:i:s')}}</td>
                                @else
                                <td>-</td>
                                @endif
                                @if($cek[0] == 'ada')
                                <td>{{\Carbon\Carbon::parse($cek[1]->created_at)->format('Y-m-d')}}</td>
                                @else
                                <td>-</td>
                                @endif
                                <td>
                                  @if($cek[0] == 'ada')
                                    @if($cek[1]->created_at <= $prs->jam->toleransi_waktu)
                                    Masuk
                                    @else
                                    Telat
                                    @endif
                                  @else
                                  Belum Absen
                                  @endif
                                </td>
                                <td>
                                  @if($cek[0] == 'ada')

                                  @else
                                  <a class="btn btn-success" href="{{ url('presensi/submit/'.$prs->id) }}"> Absen </a>
                                  @endif
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