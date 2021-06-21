@extends('layout/Master2')
@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profil Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Profil Mahasiswa</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
</section>

<section class="content">
<div class="card card-solid">
<div class="card-body">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle"
               src="{{asset('storage/'.$profile->foto)}}"
               alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{$profile->nama}}</h3>

        <p class="text-muted text-center">Mahasiswa</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>NIM</b> <a class="float-right">{{$profile->nim}}</a>
          </li>
          <li class="list-group-item">
            <b>Nama Lengkap</b> <a class="float-right">{{$profile->nama}}</a>
          </li>
          <li class="list-group-item">
            <b>Kelas</b> <a class="float-right">{{$profile->kelas->nama_kelas}}</a>
          </li>
          <li class="list-group-item">
            <b>Jenis Kelamin</b> <a class="float-right">{{$profile->jenis_kelamin}}</a>
          </li>
        </ul>
        
        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
        <p class="text-muted">{{$profile->alamat}}</p>
        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> No Handphone</strong>
        <p class="text-muted">{{$profile->no_handphone}}</p>

        <a href="{{ url('/home/mahasiswa') }}" class="btn btn-primary btn-block"><b>back</b></a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    
</div>
</div>
</div>
</div>
</section>
</div>
    
@endsection