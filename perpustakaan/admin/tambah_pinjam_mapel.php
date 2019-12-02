<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $kode_judul = $_POST["id_judul_tahunan"];
    $kode_buku = $_POST["kode_buku_tahunan"];
    $nama_peminjam = $_POST["id_nis"];
    $tgl_pinjam = Date('l, Y-m-d');
    $tgl_kembali =Date('l, Y-m-d', time()+31536000);
    
    //cek stok buku
    $stok_buku = cek_stok($conn, $kode_judul);

    if ($stok_buku < 1) {
    echo "
        <script>
            alert('stok buku habis, proses peminjaman gagal');
            document.location.href = 'tambah_pinjam_mapel.php';
        </script>
    ";
    exit();
    }
   
    //query insert data
    $tambah = mysqli_query($conn, "INSERT INTO peminjaman_buku_mapel VALUES (NULL, '$kode_judul', '$kode_buku', '$nama_peminjam', '$tgl_pinjam', '$tgl_kembali', 'masa pinjam')");
    if($tambah == true){

    kurangi_stok($conn, $kode_judul);
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'peminjaman_mapel.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('gagal menambahkan data');
            document.location.href = 'peminjaman_mapel.php';
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
    <title>Tambah Peminjaman Mapel Kelas</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Tambah Data Peminjaman Buku mapel</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
      
    <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kode_judul_buku_mapel">Kode Judul Buku Mapel : </label> <a href="kode_judul.php" class="btn btn-warning" title="tambah_kode_judul" >Tambah Kode Judul</a>
              <select class="form-control" name="kode_judul" id="kode_judul" required >
                    <option value="">- Kode Judul Buku -</option>
                    <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM peminjaman_buku_mapel") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['id_judul_buku_mapel'].'">' .$data_kode['id_judul_buku_mapel']. '</option>'; 
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
              <label for="id_kode_kelas">Kode Kelas : </label> <a href="kode_kelas.php" class="btn btn-warning" title="tambah_kode" >Tambah Kode Kelas</a>
                <select class="form-control" name="id_kode_kelas" id="id_kode_kelas" required >
                  <option value="">- Pilih Kode Kelas -</option>
                  <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM peminjaman_buku_mapel") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['kode_kelas'].'">' .$data_kode['kode_kelas']. '</option>'; 
                    }
                    ?>
                </select>
            </div>
            </div>
           
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_peminjam">Nama Peminjam : </label> <a href="nama_peminjam.php" class="btn btn-warning" title="tambah_nama" >Tambah Nama</a>
              <select class="form-control" name="nama_peminjam" id="nama_peminjam" required >
                    <option value="">- Nama Peminjam -</option>
                    <?php
                    $sql_member = mysqli_query($conn, "SELECT * FROM peminjaman_buku_mapel") or die (mysqli_query($conn));
                    while ($data_nama = mysqli_fetch_array($sql_member)){
                      echo '<option value="'.$data_nama['nama_peminjam'].'">' .$data_nama['nama_peminjam']. '</option>'; 
                    }
                   ?>
                </select>
            </div>   
            <div class="form-group col-md-6">
            <label for="waktu_peminjaman"> Waktu Peminjaman : </label>
              <input type="text" class="form-control" placeholder = "<?php  echo Date('l, d-m-Y  h:i:s a');?>" name="tanggal_peminjaman" id="waktu_peminjaman" readonly>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="banyak_buku"> Stok Buku : </label>
              <input type="text" class="form-control" placeholder="Masukkan Stok Buku" name="kode_buku_literasi" id="banyak_buku">
            </div>
           
            <div class="form-group col-md-6">
              <label for="notifikasi">Notifikasi : </label> <a href="notifikasi.php" class="btn btn-warning" title="notifikasi" >Notifikasi</a>
                <select class="form-control" name="id_notifikasi" id="id_notifikasi" required >
                  <option value="">- Pilih Notifikasi -</option>
                  <?php
                    $sql_notif = mysqli_query($conn, "SELECT * FROM peminjaman_buku_mapel") or die (mysqli_query($conn));
                    while ($data_notif = mysqli_fetch_array($sql_notif)){
                      echo '<option value="'.$data_notif['notifikasi'].'">' .$data_notif['notifikasi']. '</option>'; 
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