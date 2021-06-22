@extends('layout/master')
@section('content')
<div class="content-wrapper" style="min-height: 2645.67px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sistem Presensi Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil Lembaga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">POLITEKNIK TADIKA MESRA</h3>
              <div class="col-12">
                <img src="../../dist/img/kampus-1.jpg" class="product-image" alt="Product Image">
              </div>
            
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Politeknik Tadika Mesra</h3>
              <p>Politeknik Tadika Mesra adalah institusi pendidikan tinggi vokasi yang terletak di kota Malang. Malang adalah kota terbesar kedua di Jawa Timur,Indonesia. Malang merupakan tempat yang nyaman untuk belajar karena udaranya yang sejuk dan populasi yang tidak begitu padat (sekitar 800 ribu penduduk). Di Malang terdapat banyak sekolah, universitas dan institusi pendidikan lainnya dengan kualitas yang bagus. Selain itu, Malang merupakan tempat yang mudah dijangkau. Kota ini dapat ditempuh dalam waktu 1 jam dari bandara interasional Juanda, Surabaya. Fasilitas transportasi umum dalam kota yang bisa digunakan untuk menuju ke Polinema juga sangat memadai.</p>
              <hr>
              <h4>Tingkatan</h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center active">
                  <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked="">
                  Tingkat 1
                  <br>
                  <i class="fas fa-circle fa-2x text-green"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                  Tingkat 2
                  <br>
                  <i class="fas fa-circle fa-2x text-blue"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                  Tingkat 3
                  <br>
                  <i class="fas fa-circle fa-2x text-yellow"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                  Tingkat 4
                  <br>
                  <i class="fas fa-circle fa-2x text-red"></i>
                </label>
              </div>

           

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Visi & Misi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Sistem Pendidikan</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">About</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                <h2>Visi</h2>
                <p>Menjadi Lembaga Pendidikan Tinggi Vokasi yang Unggul dalam Persaingan Global</p>
                  <h2>Misi</h2>
                  
                  <ol>
                  <li><span class="fontstyle0">Menyelenggarakan dan Mengembangkan Pendidikan Vokasi yang Berkualitas, Inovatif, dan Berdaya Saing yang Mendorong Pola Pembelajaran Seumur Hidup dan Tumbuhnya Jiwa Kewirausahaan serta Sesuai Kebutuhan Industri, Lembaga Pemerintah, dan Masyarakat.</span></li>
                  <li><span class="fontstyle0">Menyelenggarakan Penelitian Terapan yang Bermanfaat bagi Pengembangan Ilmu Pengetahuan dan Teknologi serta Kesejahteraan Masyarakat.</span></li>
                  <li><span class="fontstyle0">Menyelenggarakan Pengabdian Kepada Masyarakat yang Bermanfaat bagi Kesejahteraan Masyarakat.</span></li>
                  <li><span class="fontstyle0">Menyelenggarakan Sistem Pengelolaan Pendidikan dengan Berdasar pada Prinsip-prinsip Tatapamong yang Baik.</span></li>
                  <li><span class="fontstyle0">Mengembangkan Kerjasama yang Saling Menguntungkan dengan Berbaga Pihak, baik di Dalam maupun di Luar Negeri pada Bidang-bidang yang Relevan.</span></li>
                  </ol>
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Politeknik Negeri Malang merupakan salah satu politeknik yang menyelenggarakan pendidikan vokasi dalam sejumlah bidang pengetahuan khusus. Menurut Pasal 15 UU No 20 Tahun 2003 SISDIKNAS, Pendidikan Vokasi merupakan pendidikan tinggi yang mempersiapkan peserta didik untuk memiliki pekerjaan dengan keahlian terapan tertentu maksimal setara dengan program sarjana. Ciri khas sistem pendidikan politeknik adalah perkuliahan yang menggunakan sistem paket dengan proses pembelajaran yang didesain agar lulusannya siap kerja. Untuk itu, sistem pendidikan ini harus didukung oleh metoda dan materi pembelajaran yang sesuai, meliputi bidang hard skill dan soft skill.</div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> 
                <table class="table">
                  <tr>
                    <td>Nama Perguruan Tinggi <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>Politeknik Negeri Malang</td>
                  </tr>
                  <tr>
                    <td>Berdiri <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>1982</td>
                  </tr>
                  <tr>
                    <td>Jenis <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>Perguruan Tinggi Negeri</td>
                  </tr>
                  <tr>
                    <td>Nomor SK PT <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>03DJKEP1979</td>
                  </tr>
                  <tr>
                    <td>Tanggal SK PT <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>27 Januari 1979</td>
                  </tr>
                  <tr>
                    <td>Alamat <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>Jl. Soekarno Hatta No. 9 Malang</td>
                  </tr>
                   <tr>
                    <td>Kota <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>Kota Malang - Provinsi Jawa Timur - Indonesia</td>
                  </tr>
                  <tr>
                    <td>Kode Pos <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>65141</td>
                  </tr>
                  <tr>
                    <td>Telepon <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>(0341) 404424-404425</td>
                  </tr>
                  <tr>
                    <td>Faximile <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>(0341) 404424</td>
                  </tr>
                  <tr>
                    <td>Email <span class="visible-mob">:</span></td>
                    <td class="hidden-mob">:</td>
                    <td>cs@polinema.ac.id</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection