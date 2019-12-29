<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';

//cek tombol submit ditekan atau tidak
if( isset($_POST['submit']) ) {
  
    // cek keberhasilan tambah data
    if( tambahkelas($_POST) > 0 ) {
      echo "
            <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'data_kelas.php';
            </script>
      ";
    } else {
      echo "
            <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'data_kelas.php';
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
    <title>Tambah Data Kelas</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Tambah Data Kelas</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kode_kelas">Kode_kelas : </label>
              <input type="text" class="form-control" placeholder ="masukkan kode kelas" name="kode_kelas" id="kode_kelas" autocomplete="off" required>
            </div>
        </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="jurusan">Jurusan : </label> 
              <input type="text" class="form-control" placeholder="Masukkan jurusan" name="jurusan" id="jurusan" autocomplete="off" required>
            </div>   
            </div>
        <div class="form-row">
        <div class="form-group col-md-6">
              <label for="wali_kelas">Wali Kelas : </label>
              <input type="text" class="form-control" placeholder ="masukkan nama wali kelas"name="wali_kelas" id="wali_kelas" autocomplete="off" required>
        </div>
      </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
              <a href="data_kelas.php" class="btn btn-success">Kembali</a>
            </div>
          </div>
        <br><br>
        
      
    </form>
    </div>
    </div>


                
</body>
</html>