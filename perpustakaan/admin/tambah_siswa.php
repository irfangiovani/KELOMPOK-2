<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';

//cek tombol submit ditekan atau tidak
if( isset($_POST["submit"]) ) {
  
    // cek keberhasilan tambah data
    if( tambahtamu($_POST) > 0 ) {
      echo "
            <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'siswa.php';
            </script>
      ";
    } else {
      echo "
            <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'siswa.php';
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
    <title>Tambah Data siswa</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Tambah Data siswa</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
     
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tanggal_absensi">Tanggal Absensi : </label> 
              <input type="text" class="form-control" placeholder = "<?php  echo Date('l, d-m-Y');?>" name="tanggal_absensi" readonly>
            </div>   
            <div class="form-group col-md-6">
            <label for="nama_siswa"> Nama siswa : </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Siswa" name="nama_siswa" id="nama_siswa">
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