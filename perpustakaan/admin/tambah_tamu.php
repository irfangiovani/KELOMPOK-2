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
    <title>Tambah Data Tamu</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Tambah Data Tamu</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
     
           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="id_pengunjung">id_pengunjung: </label>
              <input type="text" class="form-control" placeholder="Masukkan Id Pengunjung." name="id_pengunjung" id="id_pengunjung">
            </div>
            <div class="form-group col-md-6">
              <label for="nama_siswa">Nama Siswa : </label> <a href="tambah_namasiswa.php" class="btn btn-warning" title="tambah_nama_siswa" >Tambah Nama Siswa</a>
                <select class="form-control" name="id_nama_siswa" id="id_nama_sswa" required >
                  <option value="">- Pilih Nama -</option>
                    <?php
                    $sql_nama = mysqli_query($conn, "SELECT * FROM pengunjung_siswa") or die (mysqli_query($conn));
                    while ($data_nama = mysqli_fetch_array($sql_nama)){
                      echo '<option value="'.$data_nama['id_nama_siswa'].'">' .$data_nama['nama_siswa']. '</option>'; 
                    }
                    ?>
                </select>
            </div>
            </div>
            
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kode_kelas">Kode Kelas : </label> <a href="kode_kelas.php" class="btn btn-warning" title="tambah_kodekelas" >Tambah Kode Kelas</a>
              <select class="form-control" name="kode_kelas" id="kode_kelas" required >
                    <option value="">- Kode Kelas -</option>
                    <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM pengunjung_siswa") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_nama['kode_kelas'].'">' .$data_kode['kode_kelas']. '</option>'; 
                    }
                   ?>
                </select>
            </div>   
            <div class="form-group col-md-6">
            <label for="Keperluan"> Keperluan : </label>
            <input type="text" class="form-control" placeholder="Masukkan Keperluan." name="id_keperluan" id="id_keperluan">
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