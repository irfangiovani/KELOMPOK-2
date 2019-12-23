<?php

require 'functions.php';



$nis = $_POST["nis"];

 if( isset($_POST["cari_literasi"])) {
  $peminjaman_literasi = query ("SELECT a.nis,a.id_pinjam_buku_literasi, a.tanggal_peminjaman, a.tanggal_hrs_kembali,
                                        a.notifikasi, b.judul_buku_literasi as kode_buku_literasi, 
                                        c.nama_siswa as nama
                                      FROM peminjaman_buku_literasi a 
                                      LEFT JOIN buku_literasi_umum b on b.kode_buku_literasi = a.kode_buku_literasi
                                      LEFT JOIN member_perpus c on c.nis = a.nis
                                      WHERE a.notifikasi='masa pinjam'
                                      AND a.nis = '$nis'
                                      ORDER BY a.id_pinjam_buku_literasi DESC"); 
  //mysqli_query ("SELECT * FROM peminjaman_buku_literasi WHERE nis = '$nis' ");
 }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>K-Negabon Library</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logosmk3.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
 
<body>
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Cari Peminjaman Siswa</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Nama Siswa</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Masukkan nama anda">
            </div>
          </div>  
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Nomor Induk Siswa</label>
              <input type="text" name = "nis" class="form-control form-control-lg form-control-a" placeholder="Masukkkan NIS anda">
            </div>
          </div>
          <div class="col-md-12">

            <button type="submit" class="btn btn-b"><a href="siswa_cek_pinjam.php">Cari Literasi </a></button>
            <button type="submit" class="btn btn-b"><a href="siswa_cek_pinjam.php">Cari Tahunan </a></button>
           
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrasi.php">Daftar Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.php">Buku</a> 
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
        <span class="search" aria-hidden="true">Cek Peminjaman</span>
      </button>
    </div>
  </nav>  
  <!--/ Nav End /-->

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                    <br>
                    <h2>Pinjam Literasi</h2>
                    </div>
                    </div>
                </div>
            </div>
        </section>  

    <br>
     <div class="container-fluid">
    <br><br>
    <form action="" method="post">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="tabel">
    <thead>
        <tr>
            <th>no</th>
            <th>Judul Buku Literasi</th>
            <th>Peminjam</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Harus Kembali</th>
            <th>Status</th>
        </tr>
        </thead>

        <tbody>
                        <?php $i = 1; ?> 
                        <?php
                            foreach( $peminjaman_literasi as $row) :
                        ?>
                        <tr>
                            <td><?=$i; ?></td>
                            <td><?php echo $row["kode_buku_literasi"];?></td>
                            <td><?php echo $row["nis"];?></td>
                            <td><?php echo $row["tanggal_peminjaman"];?></td>
                            <td><?php echo $row["tanggal_hrs_kembali"];?></td>
                            <td><?php echo $row["notifikasi"];?></td>
                        </tr>
                      <?php $i++; ?> 
                      <?php endforeach; ?>
                      </tbody>
        </table>
    </div>
    </form>
  </div>
  </body>
</html>
