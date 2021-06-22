{{-- <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}"> 
   Theme style
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}"> --}}
  <div class="row">
    <div class="col-lg-12margin-tb">
      <div class="pull-leftmt-2">
        <h3 style="text-align: center">JURUSAN TEKNOLOGI INFORMASI</h3>
        <h2 style="text-align: center">POLITEKNIK TADIKA MESRA</h2><hr>
      </div>
      <p align="center">LAPORAN HASIL PRESENSI</p>
      {{-- <p align="center">{{$mhs->nama}}</p> --}}
  </div>
  <div>
    <table style="width: 50%">
      <tr>
        <td>Nama</td><td>: {{$mhs->nama}}</td>
      </tr>
      <tr>
        <td>NIM</td><td>: {{$mhs->nim}}</td>
      </tr>
      <tr>
        <td>Kelas</td><td>: {{$mhs->kelas->nama_kelas}}</td>
      </tr>
    </table>
  </div>
  </div>
  <table class="table table-hover" border="1" style="width: 100%"> 
  <tr>
    <th>NIM</th>
    <th>Tanggal</th>
    <th>Matakuliah</th>
    <th>Status</th>
  </tr>
  
  @foreach ($presensi as $prs)
  <tr>
      <td>{{ $prs->mahasiswa->nim }}</td>
      <td>{{ $prs->updated_at->format('Y-m-d') }}</td>
      <td>{{ $prs->jadwal->dosen->matakuliah->nama_matakuliah }}</td>
      <td>{{ $prs->status}}</td>
      
  </tr>

  @endforeach
  </table>
  <!-- Bootstrap 4 -->
  {{-- <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
  