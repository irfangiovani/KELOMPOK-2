<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
  include 'functions.php';
  $id = $_GET["id"];
  $data = query("SELECT * FROM peminjaman_buku_tahunan WHERE id_pinjam_buku_tahunan = '$id'")[0];
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Konfirmasi pengembalian tahunan</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Konfirmasi Pengembalian Buku Tahunan</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-4">
                  <label for="id_pinjam_tahunan">ID Pinjam Buku Tahunan : </label>
                  <input type="text" class="form-control" value ="<?php echo $data['id_pinjam_buku_tahunan'] ?>" name="id_pinjam_tahunan" id="id_pinjam_tahunan">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
                  <label for="id_judul_tahunan">ID Judul Buku Tahunan : </label>
                  <input type="text" class="form-control" value ="<?php echo $data['id_judul_buku_tahunan'] ?>" name="id_judul_tahunan" id="id_judul_tahunan">
        </div>
        <div class="form-group col-md-6">
              <label for="kode_buku_tahunan"> Kode Buku Tahunan : </label>
              <input type="text" class="form-control" value ="<?php echo $data['kode_buku_tahunan'] ?>" name="kode_buku_tahunan" id="kode_buku_tahunan">
        </div>
      </div> 
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="tanggal_peminjaman"> Tanggal Peminjaman : </label>
              <input type="text" class="form-control" placeholder = "<?php  echo Date('l, Y-m-d');?>" name="tanggal_peminjaman" id="tanggal_peminjaman" readonly>
        </div>
        <div class="form-group col-md-6">
              <label for="tanggal_hrs_kembali"> Tanggal Jatuh Tempo : </label>
              <input type="text" class="form-control" placeholder="<?php echo Date('l, Y-m-d', time()+31536000); ?>" name="tanggal_hrs_kembali" id="tanggal_hrs_kembali" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="tanggal_kembali"> Tanggal Pengembalian : </label>
              <input type="date" class="form-control" placeholder = "Tanggal Pengembalian" name="tanggal_kembali" id="tanggal_kembali" >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="terlambat"> Terlambat : </label>
              <input type="text" class="form-control" placeholder = "Terlambat" name="terlambat" id="terlambat" >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="denda"> Denda : </label>
              <input type="text" class="form-control" placeholder = "Denda" name="denda" id="denda" >
        </div>
      </div>
      <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">SELESAI</button>
              <button type="reset" class="btn btn-danger">RESET</button>
              <a href="pengembalian_tahunan.php" class="btn btn-success">Kembali</a>
      </div>
  
        <br><br>
        
      
    </form>
    </div>
    </div>



                
</body>
</html>