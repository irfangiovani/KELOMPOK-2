<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';
$buku_literasi_umum = query("SELECT * FROM buku_literasi_umum");

$buku_literasi_umum = query ("SELECT a.kode_buku_literasi, a.judul_buku_literasi, a.tahun_terbit, a.gambar_sampul, a.deskripsi_buku, b.nama_kategori as id_kategori, c.nama_penerbit as id_penerbit, d.no_rak as id_rak FROM buku_literasi_umum a LEFT JOIN kategori b on b.id_kategori = a.id_kategori LEFT JOIN penerbit c on c.id_penerbit = a.id_penerbit LEFT JOIN rak d on d.id_rak = a.id_rak ORDER BY a.kode_buku_literasi ASC"); 

//tombol cari ditekan
if( isset($_POST["cari"])) {
  $buku_literasi_umum = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Perpustakaan SMKN 3 Bondowoso</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/logosmk3.jpg" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
                <li><a href="#">Home</a> &#47;</li>
                <li><a href="#">Terms</a> &#47;</li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
                <li><a href="logout.php" class="btn btn-warning btn-rounded">LOGOUT</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span3">
            <div class="logo">
              <h1><a href="index.html"><i class="icon-tint"></i> K-Negabon Library</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li><a href="index.php">Beranda</a></li>
                    <li class="dropdown active">
                      <a href="#">Koleksi Buku<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="literasi.php">Buku Literasi Umum</a></li>
                        <li><a href="mapel.php">Buku Mapel Kelas</a></li>
                        <li><a href="tahunan.php">Buku Tahunan Siswa</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Peminjaman<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="peminjaman_literasi.php">Buku Literasi Umum</a></li>
                        <li><a href="peminjaman_mapel.php">Buku Mapel Kelas</a></li>
                        <li><a href="peminjaman_tahunan.php">Buku Tahunan Siswa</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pengembalian<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">Buku Literasi Umum</a></li>
                        <li><a href="portfolio-3cols.html">Buku Mapel Kelas</a></li>
                        <li><a href="portfolio-4cols.html">Buku Tahunan Siswa</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pengunjung<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Siswa</a></li>
                        <li><a href="blog-right-sidebar.html">Tamu</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="data_member.php">Data Member Siswa</a>
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
              <h2>Buku Literasi Umum</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Beranda</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Koleksi Buku</a> <i class="icon-angle-right"></i></li>
              <li class="active">Literasi Umum</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <a href="index.php" class="btn btn-warning pull-right"><i class="icon-arrow-left"></i> kembali</a>

    <br>
    <div class="container-fluid">
    <a href="tambah_literasi.php">Tambah Buku Literasi Umum</a>

    <br><br>
  <form action="" method="post" class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="keyword" autofocus placeholder="Search" aria-label="Search" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari!</button>
  </form>

  <div class="offside-3 col-lg-7">
    <form action="" method="post">
      <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover ">

        <tr>
		      	<th>no</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>No Rak</th>
            <th>Kategori</th>
            <th>Gambar Sampul</th>
            <th>Deskripsi Buku</th>
            <th>aksi</th>
        </tr>
		<?php $i = 1; ?> 
        <?php
            foreach( $buku_literasi_umum as $row) :
        ?>
        <tr>
			      <td><?=$i; ?></td>
            <td><?php echo $row["kode_buku_literasi"]; ?></td>
            <td><?php echo $row["judul_buku_literasi"];?></td>
            <td><?php echo $row["id_penerbit"];?></td>
            <td><?php echo $row["tahun_terbit"];?></td>
            <td><?php echo $row["id_rak"];?></td>
            <td><?php echo $row["id_kategori"];?></td>
            <td><img src="img/literasi/<?php echo $row["gambar_sampul"]; ?>" width="50"></td>
            <td><?php echo $row["deskripsi_buku"];?></td>
            <td>
              <a href="ubah_literasi.php?id=<?php echo $row ['kode_buku_literasi']; ?>" class="btn btn-warning" title="ubah data" >ubah</a>

              <a href="hapus_literasi.php?id=<?= $row["kode_buku_literasi"]; ?>
              " onclick="return confirm('Yakin Ingin Menghapus Data Ini?');"  class="btn btn-danger" title="hapus data">hapus</a>
            </td>
        </tr>
			<?php $i++; ?>
			<?php endforeach; ?>
    </table>
    </div>
    </form>
  </div>
  </div>


    
    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"><i class="icon-tint"></i> Remember</a></h3>
              </div>
              <address>
							  <strong>Remember company Inc.</strong><br>
  							Somestreet KW 101, Park Village W.01<br>
  							Jakarta 13426 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Our company</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Press release</a></li>
                <li><a href="#">What we have done</a></li>
                <li><a href="#">Our support forum</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">From flickr</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear"></div>
  
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Remember Inc. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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


</body>

</html>
