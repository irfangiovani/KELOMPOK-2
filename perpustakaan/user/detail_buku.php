<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
require 'functions.php';
$id = $_GET["id"];
// $data = query("SELECT * FROM buku_literasi_umum WHERE kode_buku_literasi = '$id'")[0];

$buku_literasi_umum = query("SELECT * FROM buku_literasi_umum WHERE kode_buku_literasi = '$id'");
 //$buku_literasi_umum = query ("SELECT a.kode_buku_literasi, a.judul_buku_literasi, a.tahun_terbit, a.gambar_sampul, a.deskripsi_buku, b.nama_kategori as id_kategori, c.nama_penerbit as id_penerbit, d.no_rak as id_rak FROM buku_literasi_umum a LEFT JOIN kategori b on b.id_kategori = a.id_kategori LEFT JOIN penerbit c on c.id_penerbit = a.id_penerbit LEFT JOIN rak d on d.id_rak = a.id_rak ORDER BY a.kode_buku_literasi ASC "); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Perpustakaan SMKN 3 Bondowoso</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logosmk3.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="css/font.css" rel="stylesheet">

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

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <?php foreach ( $buku_literasi_umum as $row) : ?>
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?= $row['judul_buku_literasi']; ?></h1>
            <span class="color-text-a">Kode Buku = <?= $row['kode_buku_literasi'] ?> </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Beranda</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= $row['judul_buku_literasi']; ?>
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
                    <h5 class="title-c"><?= $row['kode_buku_literasi'] ?></h5>
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
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Tahun Terbit : </strong>
                      <span><?= $row['tahun_terbit'] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Kategori : </strong>
                      <span><?= $row['id_kategori'] ?></span>
                    <li class="d-flex justify-content-between">
                      <strong>Rak : </strong>
                      <span><?= $row['id_rak'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-6 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Deskripsi Buku</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  <?= $row['deskripsi_buku']; ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach ; ?>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">School Address </h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
              Jl. Santawi No.96 A, Tamansari Indah, Kec. Bondowoso
              Kabupaten Bondowoso, Jawa Timur 68216 Indonesia.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> (123)454-441</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> anitadwisalasari@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Developer Identity</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +62 853-3075-0875</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> teamprogresslibrarybondowoso@gmail.com</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Developer</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Yudi Irianto</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Irfan giovani</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Ilham Robby Sanjaya</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Azizah Wina Sriwinarsih</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Muhammad Ansori</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Beranda</a>
              </li>
              <li class="list-inline-item">
                <a href="registrasi.php">Daftar Member</a>
              </li>
              <li class="list-inline-item">
                <a href="buku.php">Buku</a>
              </li>
              <li class="list-inline-item">
                <a href="bantuan.php">Bantuan</a>
              </li>
              <li class="list-inline-item">
                <a href="../admin/loginadmin.php">Login</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/SMKN3BONDOWOSO2017/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/smkn3bondowoso/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">K-NegabonTeam</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">Dev.TeamK-Negabon</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
