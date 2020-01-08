<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
require 'functions.php';
// $data = query("SELECT * FROM buku_literasi_umum WHERE kode_buku_literasi = '$id'")[0];

<<<<<<< HEAD
$buku_mapel_kelas = query("SELECT buku_mapel_kelas.gambar_sampul, buku_mapel_kelas.judul_buku_mapel, 
                                  peminjaman_buku_mapel.nama_peminjam, peminjaman_buku_mapel.waktu_peminjaman, 
                                  peminjaman_buku_mapel.banyak_buku, peminjaman_buku_mapel.notifikasi
                           FROM buku_mapel_kelas 
                           LEFT JOIN peminjaman_buku_mapel ON buku_mapel_kelas.id_judul_buku_mapel = peminjaman_buku_mapel.id_judul_buku_mapel 
                           WHERE id_judul_buku_mapel ='$id'");
//  $buku_literasi_umum = query ("SELECT a.kode_buku_literasi, a.judul_buku_literasi, a.tahun_terbit, a.gambar_sampul, a.deskripsi_buku, b.nama_kategori as id_kategori, c.nama_penerbit as id_penerbit, d.no_rak as id_rak FROM buku_literasi_umum a LEFT JOIN kategori b on b.id_kategori = a.id_kategori LEFT JOIN penerbit c on c.id_penerbit = a.id_penerbit LEFT JOIN rak d on d.id_rak = a.id_rak ORDER BY a.kode_buku_literasi ASC "); 
=======
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
>>>>>>> 1d1861e465dfa77ad72c480eb7e17b574f58e638

require '../admin/functions.php';
$peminjaman_mapel = mysqli_query($conn,"SELECT a.id_pinjam_buku_mapel, a.nama_peminjam, a.waktu_peminjaman, a.banyak_buku, a.notifikasi, b.judul_buku_mapel as id_judul_buku_mapel, c.jurusan as kode_kelas
                          FROM peminjaman_buku_mapel a LEFT JOIN buku_mapel_kelas b on b.id_judul_buku_mapel = a.id_judul_buku_mapel LEFT JOIN kelas c on c.kode_kelas = a.kode_kelas  WHERE a.notifikasi='masa pinjam' ORDER BY a.id_pinjam_buku_mapel DESC"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Peminjaman Buku Mapel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet">
  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<<<<<<< HEAD
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">  
      <h3 class="title-d">Cari Peminjaman Siswa</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <a class="btn btn-b" href="cari_literasi.php">Cari Literasi</a>
    <a class="btn btn-b" href="cari_tahunan.php">Cari Tahunan</a>
         
           
           
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
          <li class="nav-item-active">
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
        <span class="search" aria-hidden="true">Cek Peminjaman</span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <?php foreach ( $buku_mapel_kelas as $row) : ?>
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?= $row['judul_buku_mapel']; ?></h1>
            <span class="color-text-a">Kode Buku = <?= $row['id_judul_buku_mapel'] ?> </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Beranda</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= $row['judul_buku_mapel']; ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <style>
    .item-b img {
      height : 430px;
    }
  </style>
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <center><div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="item-b col-md-4">
              <img src="../admin/img/literasi/<?php echo $row["gambar_sampul"]; ?>" alt="">
            </div>
          </div></center>
          <div class="row">
            <div class="item-b col-md-6">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="fa fa-book"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c"><?= $row['id_judul_buku_mapel'] ?></h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Keterangan</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Penerbit : </strong>
                      <span><?= $row['id_penerbit'] ?></span>
=======

  <div id="wrapper">
    <!-- start header -->
    <header>
    <?php require'head.php'; ?>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.php"><i class="icon-tint"></i> K-Negabon Library</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li><a href="index.php">Beranda</a></li>
                    <li class="dropdown">
                      <a href="#">Koleksi Buku<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="literasi.php">Buku Literasi Umum</a></li>
                        <li><a href="mapel.php">Buku Mapel Kelas</a></li>
                        <li><a href="tahunan.php">Buku Tahunan Siswa</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active">
                      <a href="#">Peminjaman<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="peminjaman_literasi.php">Buku Literasi Umum</a></li>
                        <li><a href="peminjaman_mapel.php">Buku Mapel Kelas</a></li>
                        <li><a href="peminjaman_tahunan.php">Buku Tahunan Siswa</a></li>
                      </ul>
>>>>>>> 1d1861e465dfa77ad72c480eb7e17b574f58e638
                    </li>
                    <li class="dropdown">
                      <a href="#">Pengembalian<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="pengembalian_literasi.php">Buku Literasi Umum</a></li>
                        <li><a href="pengembalian_mapel.php">Buku Mapel Kelas</a></li>
                        <li><a href="pengembalian_tahunan.php">Buku Tahunan Siswa</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pengunjung<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="siswa.php">Siswa</a></li>
                        <li><a href="tamupen.php">Tamu</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Data<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="data_member.php">Member Siswa</a></li>
                        <li><a href="data_kelas.php">Kelas</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Peminjaman Buku Mapel Kelas</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Beranda</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Peminjaman</a> <i class="icon-angle-right"></i></li>
              <li class="active">Buku Mapel Kelas</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <br>
     <div class="container-fluid">
    <a href="tambah_pinjam_mapel.php" class="btn btn-info icon-plus">Tambah Data Peminjaman Mapel</a>
    <br><br>

      <div class="content">
        <div class="box">
          <div class="offside-3 col-lg-7">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tabel">
                </div>
                  <thead>
                  <tr bgcolor="yellow" align="center">
                        <th>no</th>
                        <th>ID Pinjam Mapel</th>
                        <th>Judul Buku Mapel</th>
                        <th>Kelas</th>
                        <th>Nama Peminjam</th>
                        <th>Waktu Pinjam</th>
                        <th>Sebanyak</th>
                        <th>Status</th>
                        <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?> 
                  <?php
                  foreach( $peminjaman_mapel as $row) :
                  ?>
                  <tr>
                  <td><?=$i; ?></td>
                        <td><?php echo $row["id_pinjam_buku_mapel"]; ?></td>
                        <td><?php echo $row["id_judul_buku_mapel"];?></td>
                        <td><?php echo $row["kode_kelas"];?></td>
                        <td><?php echo $row["nama_peminjam"];?></td>
                        <td><?php echo $row["waktu_peminjaman"];?></td>
                        <td><?php echo $row["banyak_buku"];?></td>
                        <td><?php echo $row["notifikasi"];?></td>
                        <td>
                            <a href="hapus_peminjaman_mapel.php?id=<?= $row["id_pinjam_buku_mapel"]; ?>
                            " onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-default" ><i class="icon-trash" title="hapus data"></i>hapus</a>
                          </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <footer>
    <?php include 'footer_admin.php';  ?>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
  <script src="js/dataTables/dataTables.bootstrap.js"></script>
  <script src="js/dataTables/jquery.dataTables.js"></script>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
    </script>

</body>

</html>
