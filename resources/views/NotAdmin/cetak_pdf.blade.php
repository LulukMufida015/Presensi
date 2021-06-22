<link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
<table class="table table-bordered">
<tr>
	<th>NIM</th>
	<th>Nama Mahasiswa</th>
	<th>Matakuliah</th>
	<th>Status</th>
</tr>
@foreach ($presensi as $prs)
<tr>
    <td>{{ $prs->mahasiswa->nim }}</td>
    <td>{{ $prs->mahasiswa->nama }}</td>
    <td>{{ $prs->jadwal->dosen->matakuliah->nama_matakuliah }}</td>
    <td>{{ $prs->status}}</td>
    
</tr>
@endforeach
</table>

<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
