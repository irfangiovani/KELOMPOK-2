<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $nama_peminjam = $_POST["nama_peminjam"];
    $kode_buku = $_POST["kode_buku"];
    $tgl_pinjam = Date('Y-m-d');
    $tgl_kembali = Date('Y-m-d');
    $notifikasi = $_POST["notifikasi"];
   
    //query insert data
    mysqli_query($conn, "INSERT INTO peminjaman_buku_literasi VALUES (null,'$nama_peminjam', '$kode_buku','$tgl_pinjam','$tgl_kembali', '$notifikasi')");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Tambah Peminjaman Literasi</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Tambah Data Peminjaman Buku Literasi Umum</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
    
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_peminjam"> Nama Peminjam : </label>
              <input type="text" class="form-control" placeholder="masukan nama" name="nama_peminjam" id="nama_peminjam">
        </div>

            <div class="form-group col-md-6">
              <label for="id_kode_nis"> NIS : </label> <a href="nis.php" class="btn btn-warning" title="tambah_nis" >Tambah NIS</a>
                <select class="form-control" name="id_nis" id="id_nis" required >
                  <option value="">- Pilih NIS -</option>
                  <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM peminjaman_buku_literasi") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_nis['nis'].'">' .$data_nis['nis']. '</option>'; 
                    }
                  ?>
                </select>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="judul_buku_literasi"> Judul Buku Literasi : </label>
              <input type="text" class="form-control" placeholder="masukan judul buku literasi" name="judul_buku_literasi" id="judul_buku_literasi">
        </div>

            <div class="form-group col-md-6">
              <label for="id_kode_buku_literasi"> Kode Buku Literasi : </label> <a href="kode_literasi.php" class="btn btn-warning" title="tambah_kode_literasi" >Tambah Kode Literasi</a>
                <select class="form-control" name="id_kode_literasi" id="id_kode_literasi" required >
                  <option value="">- Pilih Kode Literasi -</option>
                  <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM peminjaman_buku_literasi") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['kode_buku_literasi'].'">' .$data_kode['kode_buku_literasi']. '</option>'; 
                    }
                    ?>
                </select>
            </div>
            </div>
            


            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
              <a href="literasi.php" class="btn btn-success">Kembali</a>
            </div>
          </div>
        <br><br>
        
      
    </form>
    </div>
    </div>


                
</body>
</html>