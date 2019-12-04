<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}  
require 'functions.php';
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $kode_judul = $_POST["kode_judul"];
    $kode_kelas = $_POST["id_kode_kelas"];
    $nama_peminjam = $_POST["nama_peminjam"];
    $waktu_peminjaman = $_POST["waktu_peminjaman"];
    $banyak_buku = $_POST["banyak_buku"];
    
    //cek stok buku
    $stok_buku = cek_stok_mapel($conn,$kode_judul);

    if ($stok_buku < $banyak_buku) {
    echo "
        <script>
            alert('stok buku habis, proses peminjaman gagal');
            document.location.href = 'tambah_pinjam_literasi.php';
        </script>
    ";
    exit();
    }
   
    //query insert data
    $tambah = mysqli_query($conn, "INSERT INTO peminjaman_buku_mapel VALUES (NULL, '$kode_judul', '$kode_kelas', '$nama_peminjam', '$waktu_peminjaman', '$banyak_buku', 'masa pinjam')");
    if($tambah == true){

    kurangi_stok_mapel($conn, $kode_judul);
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
              <label for="kode_judul">Kode Judul Buku Mapel : </label> 
              <select class="form-control" name="kode_judul" id="kode_judul" required >
                    <option value="">- Kode Judul Buku -</option>
                    <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM buku_mapel_kelas") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['id_judul_buku_mapel'].'">'.$data_kode['judul_buku_mapel'].' '.$data_kode['untuk_kelas'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
              <label for="id_kode_kelas">Kode Kelas : </label> 
                <select class="form-control" name="id_kode_kelas" id="id_kode_kelas" required >
                  <option value="">- Pilih Kode Kelas -</option>
                  <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM kelas") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['kode_kelas'].'">' .$data_kode['kode_kelas']. '</option>'; 
                    }
                    ?>
                </select>
            </div>
            </div>
           
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_peminjam">Nama Peminjam : </label> 
              <input type="text" class="form-control" placeholder="Masukkan Nama Peminjam" name="nama_peminjam" id="nama_peminjam">
            </div>   
            <div class="form-group col-md-6">
            <label for="waktu_peminjaman"> Waktu Peminjaman : </label>
              <input type="time" class="form-control" name="waktu_peminjaman" id="waktu_peminjaman">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="banyak_buku"> Banyak Buku Dipinjam : </label>
              <input type="text" class="form-control" placeholder="Banyak Buku Dipinjam" name="banyak_buku" id="banyak_buku">
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