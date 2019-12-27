<?php
session_start();
 if( !isset($_SESSION["login"])){
     header("location: loginadmin.php");
     exit;
 }
 require 'functions.php';
$pustakawan = query("SELECT * FROM pustakawan");

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
  <link href="css/font.css" rel="stylesheet">
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
    <?php include 'tag_header.php';  ?>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
                <h1><a class="navbar-brand" href="index.html">
                    <img src="ico/logosmk3.jpg"/> SMKN 3 BONDOWOSO</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.php" >Beranda</a>
                    </li>
                    <li class="dropdown">
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

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2>Welcome To K-Negabon Library</h2>
        <h3>PERPUSTAKAAN SMK NEGERI 3 BONDOWOSO</h3>
      </div>
    </section>                                          
    <br><br>
    <div class="offside-3 col-lg-7">         
    <form action="" method="post">
      <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover ">

        <tr>
            <th>NO</th>
		      	<th>NIP</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
		<?php $i = 1; ?> 
        <?php
            foreach( $pustakawan as $row) :
        ?>
        <tr>
			      <td><?=$i; ?></td>
            <td><?php echo $row["nip"]; ?></td>
            <td><?php echo $row["nama_pustakawan"];?></td>
            <td><?php echo $row["username"];?></td>
            <td>
              <a href="ubah_pustakawan.php?id=<?php echo $row ['nip']; ?>" class="btn btn-warning" title="ubah data" >ubah</a>

              <a href="hapus_pustakawan.php?id=<?= $row["nip"]; ?>
              " onclick="return confirm('Yakin Ingin Menghapus Data Ini?');"  class="btn btn-danger" title="hapus data">hapus</a>
            </td>
        </tr>
			<?php $i++; ?>
			<?php endforeach; ?>
    </table>
    </div>
    </form>
  </div>
    <!-- /section intro -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-info badge-circled">1</span>
                    <image class="gambar" src="img/sekolah.png"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Kepala Sekolah Perpustakaan</strong></h4>
                    <p>
                      Memimpin sekolah dalam rangka pendayagunaan sumber daya sekolah secara optimal.
                    </p>
                    <a href="sekolah_pustakawan.php">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-success badge-circled">2</span>
                    <image class="gambar" src="img/sekres.png"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Kepala Perpustakaan</strong></h4>
                    <p>
                      Bertanggung jawab dalam penyusunan rencana strategis, rencana kerja, dan anggaran di bidang perpustakaan.
                    </p>
                    <a href="kepala_pustakawan.php">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-warning badge-circled">3</span>
                    <image class="gambar" src="img/trasi.png"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Adminitrasi Perpustakaan</strong></h4>
                    <p>
                      Memberikan layanan pengguna perpustakaan seperti sirkulasi peminjaman dan pengembalian.
                    </p>
                    <a href="administrasi.php">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-important badge-circled">4</span>
                    <image class="gambar" src="img/teknis12.png"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Pelayanan Teknisi</strong></h4>
                    <p>
                     Bertanggung jawab dalam kegiatan pengadaan perpustakaan dan pengolahan perpustakaan.
                    </p>
                    <a href="pelayan_teknis.php">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  
    <footer>
      <?php include'footer_admin.php';   ?>
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
