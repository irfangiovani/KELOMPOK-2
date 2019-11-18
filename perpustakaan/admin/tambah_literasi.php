<?php
$conn = mysqli_connect ("localhost" , "root","", "perpustakaan");
//cek tombol submit ditekan atau tidak
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $kode_buku_literasi = $_POST["kode_buku_literasi"];
    $judul_buku_literasi = $_POST["judul_buku_literasi"];
    $id_penerbit = $_POST["id_penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $id_rak = $_POST["id_rak"];
    $id_kategori = $_POST["id_kategori"];
    $gambar_sampul = $_POST["gambar_sampul"];
    $deskripsi_buku = $_POST["deskripsi_buku"];

    //query insert data
    mysqli_query($conn, "INSERT INTO buku_literasi_umum VALUES ('$kode_buku_literasi', '$judul_buku_literasi','$id_penerbit','$tahun_terbit', '$id_rak', '$id_kategori', '$gambar_sampul','$deskripsi_buku')");
require 'functions.php';

//cek tombol submit ditekan atau tidak
if( isset($_POST["submit"]) ) {

    // cek keberhasilan tambah data
    if( tambah($_POST) > 0 ) {
      echo "
            <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'literasi.php';
            </script>
      ";
    } else {
      echo "
            <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'literasi.php';
            </script>
      ";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Tambah Buku Literasi Umum</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-success text-center mt-3">Tambah Buku Literasi Umum</h2>
    <div class="pull-right">
    <form action="" method="post">
    <form action="" method="post" enctype="multipart/form-data">
    
           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kode_buku_literasi">Kode Buku Literasi : </label>
              <input type="text" class="form-control" placeholder="Masukkan Kode Buku..." name="kode_buku_literasi" id="kode_buku_literasi">
            </div>
            <div class="form-group col-md-6">
              <label for="id_kategori">Kategori : </label> <a href="kategori.php" class="btn btn-warning" title="tambah_kategori" >Tambah Kategori</a>
                <select class="form-control" name="id_kategori" id="id_kategori" required >
                  <option value="">- Pilih Kategori -</option>
                    <?php
                    $sql_kategori = mysqli_query($conn, "SELECT * FROM kategori") or die (mysqli_query($conn));
                    while ($data_kategori = mysqli_fetch_array($sql_kategori)){
                      echo '<option value="'.$data_kategori['id_kategori'].'">' .$data_kategori['nama_kategori']. '</option>'; 
                    }
                    ?>
                </select>
            </div>
            </div>
            <div class="form-group text-center">
                  <label for="judul_buku_literasi">Judul Buku Literasi : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Judul Buku..." name="judul_buku_literasi" id="judul_buku_literasi">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="id_penerbit">Penerbit : </label> <a href="penerbit.php" class="btn btn-warning" title="tambah_penerbit">Tambah Penerbit</a>
                  <select class="form-control" name="id_penerbit" id="id_penerbit" required >
                  <option value="">- Pilih Nama Penerbit -</option>
                    <?php
                    $sql_penerbit = mysqli_query($conn, "SELECT * FROM penerbit") or die (mysqli_query($conn));
                    while ($data_penerbit = mysqli_fetch_array($sql_penerbit)){
                      echo '<option value="'.$data_penerbit['id_penerbit'].'">' .$data_penerbit['nama_penerbit']. '</option>'; 
                    }
                    ?>
                </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="tahun_terbit">Tahun Terbit : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Tahun Terbit..." name="tahun_terbit" id="tahun_terbit">
                </div>

                <div class="form-group col-md-4">
                  <label for="id_rak">No Rak : </label> <a href="rak.php" class="btn btn-warning" title="tambah_rak">Tambah Rak</a>
                  <select class="form-control" name="id_rak" id="id_rak" required >
                  <option value="">- pilih No Rak -</option>
                    <?php
                    $sql_rak = mysqli_query($conn, "SELECT * FROM rak") or die (mysqli_query($conn));
                    while ($data_rak = mysqli_fetch_array($sql_rak)){
                      echo '<option value="'.$data_rak['id_rak'].'">'. '</option>'; 
                    }
                    ?>
                </select>
                </div>
            </div>

            <div class="form-group text-center">
              <label for="deskripsi_buku">Deskripsi Buku : </label>
              <textarea type="text" name="deskripsi_buku" id="deskripsi_buku" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
              <label for="gambar_sampul">Gambar Sampul : </label>
              <input type="file" class="form-control-file" name="gambar_sampul" id="gambar_sampul">
              <small>(Upload File Dengan Ukuran Maksiman 1 MB)</small>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
            </div>
        <br><br>
        </form>
    </form>
    </div>
    </div>
                
</body>
</html>