@extends('NotAdmin/Master2')
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
               src="../../dist/img/user4-128x128.jpg"
               alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">Nama User</h3>

        <p class="text-muted text-center">Mahasiswa</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>NIM</b> <a class="float-right">...</a>
          </li>
          <li class="list-group-item">
            <b>Nama Lengkap</b> <a class="float-right">543</a>
          </li>
          <li class="list-group-item">
            <b>Kelas</b> <a class="float-right">13,287</a>
          </li>
          <li class="list-group-item">
            <b>Jenis Kelamin</b> <a class="float-right">13,287</a>
          </li>
        </ul>
        
        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
        <p class="text-muted">Malibu, California</p>
        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> No Handphone</strong>
        <p class="text-muted">Malibu, California</p>

        <a href="#" class="btn btn-primary btn-block"><b>back</b></a>
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