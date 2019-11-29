<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $nama_peminjam = $_POST["id_nis"];
    $kode_buku = $_POST["id_kode_literasi"];
    $tgl_pinjam = Date('l, Y-m-d');
    $tgl_kembali =Date('l, Y-m-d', time()+518400);
    
   
    //query insert data
    $tambah = mysqli_query($conn, "INSERT INTO peminjaman_buku_literasi VALUES (NULL, '$kode_buku', '$nama_peminjam', '$tgl_pinjam', '$tgl_kembali', 'masa pinjam')");
    if($tambah){
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'peminjaman_literasi.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('gagal menambahkan data');
            document.location.href = 'peminjaman_literasi.php';
        </script>
    ";
  }
}

echo Date('l, Y-m-d');

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
          <label for="id_kode_nis"> NIS : </label> 
            <select class="form-control" name="id_nis" id="id_nis" required >
              <option value="">- Pilih NIS -</option>
                  <?php
                    $sql_member = mysqli_query($conn, "SELECT * FROM member_perpus") or die (mysqli_query($conn));
                    while ($data_member = mysqli_fetch_array($sql_member)){
                      echo '<option value="'.$data_member['nis'].'">' .$data_member['nis']. '</option>'; 
                    }
                  ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_kode_buku_literasi"> Kode Buku Literasi : </label>
            <select class="form-control" name="id_kode_literasi" id="id_kode_literasi" required >
              <option value="">- Pilih Kode Literasi -</option>
                  <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM buku_literasi_umum") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['kode_buku_literasi'].'">' .$data_kode['judul_buku_literasi']. '</option>'; 
                    }
                  ?>
            </select>
        </div>
      </div> 
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="tanggal_peminjaman"> Tanggal Peminjaman : </label>
              <input type="text" class="form-control" placeholder = "<?php  echo Date('l, Y-m-d');?>" name="tanggal_peminjaman" id="tanggal_peminjaman" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="tanggal_hrs_kembali"> Tanggal Harus Kembali : </label>
              <input type="text" class="form-control" placeholder="<?php echo Date('l, Y-m-d', time()+518400); ?>" name="tanggal_hrs_kembali" id="tanggal_hrs_kembali" readonly>
        </div>
      </div>
      <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
              <a href="peminjaman_literasi.php" class="btn btn-success">Kembali</a>
      </div>
  
        <br><br>
        
      
    </form>
    </div>
    </div>



                
</body>
</html>