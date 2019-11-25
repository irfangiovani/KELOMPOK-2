<?php
require 'koneksi.php'; 
$pencarian = mysqli_real_escape_string($koneksi, $_POST['pencarian']); 

if((isset($_POST['submit'])) AND ($_POST['pencarian'] <> "")) 
{  
  $query_cari = "SELECT * FROM buku_literasi_umum WHERE judul_buku_literasi LIKE '%$pencarian%' || tahun_terbit  LIKE '%$pencarian%' ";
  $hasil_cari = mysqli_query($koneksi, $query_cari);
  $data_cari  = mysqli_num_rows($hasil_cari); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMKN 3 BONDOWOSO</title>
  <meta charset="UTF-8">
  <meta name="description" content="Academica Learning Page Template">
  <meta name="keywords" content="academica, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->   
  <link href="img/logosmk3.png" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/flaticon.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/style.css"/>

<style>
.bondowoso{
  position: absolute;
  top: 0px;
}
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: url(bg.jpg)
            }
            .box {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(5%, 40%);
                background: rgba(0, 0, 0,.8);
                width: 400px;
                padding: 40px;
                box-sizing: border-box;
                box-shadow: 0 15px 25px rgba(0,0,0.5);
                border-radius: 10px;
            }
            .box h2 {
                margin: 0 0 0 30px;
                padding: 0;
                color: #fff;
                text-align: center;
                font-size: 20px;
            }
            .box .inputBox {
                position: relative;
            }
            .box .inputBox input {
                width: 100%;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid #fff;
                outline: none;
                background: transparent;
            }
            .box .inputBox label {
                position: absolute;
                top: 0;
                left: 0;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                pointer-events: none;
                transition: .5%;
            }
            .box .inputBox input:focus ~ label {
                top: -20px;
                left: 0;
                color: #03a9f4;
                font-size: 12px;
            }
            .box input [type="submit"] {
                background: transparent;
                border: none;
                outline: none;
                color: #fff;
                background: blue;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
            }

</style>
</head>
<body>
  <div id="preloder">
    <div class="loader"></div>
  </div>
    
  <!-- Header navbar -->
  
  <header class="header-section">
    <div class="header-warp">
      <div class="container">
        <a href="#" class="site-logo">
          <img src="img/yudi.png" class="bondowoso">
        </a>
        <div class="user-panel">
          <a href="admin/loginadmin.php">Login</a>
          
        </div>
        <div class="nav-switch">
          <i class="fa fa-bars"></i>
        </div>
        <ul class="main-menu">
          <li><a href="courses.php">Beranda</a></li>
          <li><a href="about.html">Buku Mapel</a></li>
          <li><a href="registermember.php">Daftar Member</a></li>
          <li><a href="blog.html">Bantuan</a></li>
        
        </ul>
      </div>
    </div>
  </header> 
  

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-sm-push-3">
        <div class="thumbnail">
          <div class="col-md-12">
            <h3>HASIL PENCARIAN</h3>
            <hr />
            <h5><span><?php echo $data_cari ?> barang ditemukan</span></h5>
          </div>
          <div class="caption-full">
            <div class="row text-center">
              <?php
                while($data_cari = mysqli_fetch_array($hasil_cari))
                {
              ?>
              <div class='col-md-4 col-sm-6'>
                <div class='thumbnail'>
                    <h4 align='center'><?php echo $data_cari['judul_buku_literasi']; ?></h4>                  < 
                    <img alt="<?php echo $data_cari['judul_buku_literasi']; ?>"
                      src="admin/img/literasi/<?php echo $data_cari['gambar_sampul']; ?>" />
                  <div class="caption" align="center">
                    <a href='<?php echo $data_cari['kode_buku_literasi']; ?>' class='btn btn-primary'>pinjam</a>
                    <a href='<?php echo $data_cari['judul_buku_literasi']; ?>.html' class='btn btn-default'>Detail</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>


  <!-- Footer section -->
  <footer class="footer-section spad pb-0">
    <div class="container">
      <div class="text-center">
        <a href="#" class="site-btn">Home <i class="fa fa-angle-right"></i></a>
      </div>
      <div class="row text-white spad">
        <div class="col-lg-3 col-sm-6 footer-widget">
        <li><a href="#">kontak</a></li>
          <ul>
            <li><a href="#">Jl. Santawi No.96 A, Tamansari Indah, Tamansari, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68216</a></li>
            <li><a href="#">(0332) 432641</a></li>
            <li><a href="#">smkn3bondowoso@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 footer-widget">
  
            </div>
        <div class="col-lg-3 col-sm-6 footer-widget">
          
        </div>
      </div>
      <div class="footer-bottom">
        
        <div class="social">
          <a href=""><i class="fa fa-pinterest"></i></a>
          <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-dribbble"></i></a>
          <a href=""><i class="fa fa-behance"></i></a>
          <a href=""><i class="fa fa-linkedin"></i></a>
        </div>
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="footer-logo">
          <a href="#">
            <img src="img/footer-logo.png" alt="">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="text-white  text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>  
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Footer section end -->

  <!====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>