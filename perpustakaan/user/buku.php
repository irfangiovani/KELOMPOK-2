<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
require 'functions.php';
$buku_mapel_kelas = query("SELECT * FROM buku_mapel_kelas");
 $buku_mapel_kelas = query ("SELECT b.gambar_sampul, b.judul_buku_mapel, b.stok, k.jurusan, k.kelas, p.nama_peminjam, p.waktu_peminjaman, p.banyak_buku FROM peminjaman_buku_mapel p LEFT JOIN buku_mapel_kelas b ON b.id_judul_buku_mapel = p.id_judul_buku_mapel LEFT JOIN kelas k ON k.kode_kelas = p.kode_kelas ORDER BY p.id_pinjam_buku_mapel DESC"); 

?>
<?php require'head.php'; ?>

<body>

<div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Cari Buku</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Nama Buku</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Masukkan Nama Buku">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Nomor Induk Siswa</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Masukkkan NIS anda">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

   <!--/ Nav Star /-->
   <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand text-brand" href="index.html"><span class="color-b">K-NEGABON </span>LIBRARY</a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center"  id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrasi.php">Daftar Member</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="buku.php">Buku Mapel</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bantuan.php">Bantuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/loginadmin.php">Login</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block  " data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Kumpulan Buku</h1>
            <span class="color-text-a">Buku Literasi Umum</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Beranda</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Buku
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <style>
 .img-box-a {
   width : 350px;
   height : 450px;
 }
 .img-box-a img {
   width : 100%;
   height : 100%;
 }
 </style>
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <?php foreach ( $buku_mapel_kelas as $row) : ?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="../admin/img/mapel/<?= $row['gambar_sampul']; ?>" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?= $row['judul_buku_mapel']; ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <a href="property-single.html" class="link-a">Lihat Detail Buku
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a text-center">
                  <ul class="card-info d-flex justify-content-around">
                  <li>
                      <h4 class="card-info-title">Kode Buku</h4>
                      <span><?= $row['kode_buku_literasi']; ?>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Terbit</h4>
                      <span><?= $row['tahun_terbit']; ?>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Rak</h4>
                      <span><?= $row['id_rak']; ?>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ; ?>
      </div> 
    </div>
  </section>
  <!--/ Intro Single End /-->
<?php require'foot.php'; ?>
