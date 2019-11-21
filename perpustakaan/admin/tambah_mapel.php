<?php
$conn = mysqli_connect ("localhost" , "root","", "perpustakaan");
//cek tombol submit ditekan atau tidak
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $id_judul_buku_mapel = $_POST["id_judul_buku_mapel"];
    $judul_buku_mapel = $_POST["judul_buku_mapel"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $untuk_kelas = $_POST["untuk_kelas"];
    $gambar_sampul = $_POST["gambar_sampul"];
    $stok = $_POST["stok"];

    //query insert data
    mysqli_query($conn, "INSERT INTO buku_mapel_kelas VALUES ('$id_judul_buku_mapel', '$judul_buku_mapel','$penerbit','$tahun_terbit', '$untuk_kelas',  '$gambar_sampul','$stok')");

    

    // cek keberhasilan tambah data
    if( mysqli_affected_rows($conn) > 0 ) {
        echo "berhasil";
    } else {
        echo "gagal!";
        echo "<br>";
        echo mysqli_error($conn);
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
    <h2 class="alert alert-danger text-center mt-3">Tambah Buku Mata Pelajaran</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="id_judul_buku_mapel">Id Judul Buku Mapel : </label> <a href="penerbit.php" class="btn btn-warning" title="tambah_id_judul_buku_mapel">Tambah Penerbit</a>
                  <select class="form-control" name="id_judul_buku_mapel" id="id_judul_buku_mapel" required >
                  <option value="">- Pilih Id Judul -</option>
                    <?php
                    $sql_penerbit = mysqli_query($conn, "SELECT * FROM penerbit") or die (mysqli_query($conn));
                    while ($data_penerbit = mysqli_fetch_array($sql_penerbit)){
                      echo '<option value="'.$data_penerbit['id_penerbit'].'">' .$data_penerbit['nama_penerbit']. '</option>'; 
                    }
                    ?>
                </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="untuk_kelas">Untuk Kelas : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Kelas..." name="untuk_kelas" id="untuk_kelas">
                </div>

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
            </div>
            <div class="form-group text-center">
                  <label for="judul_buku_mapel">Judul Buku Mapel : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Judul Buku..." name="judul_buku_mapel" id="judul_buku_mapel">
            </div>
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
</body>
</html>

           