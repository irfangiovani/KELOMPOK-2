<?php
require 'functions.php';

//ambil data di URL

$id = $_GET["id"];
var_dump($id);
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM buku_tahunan_siswa where id = $id");


//cek tombol submit ditekagagalidak
if( isset($_POST["submit"])){

// cek apakah data berhasil diubah atau tidak
if( ubah($_POST) > 0){
    echo "
        <script>
            alert ('data gagal diubah');
            document.location.href = 'tahunan.php';
        </script>
        ";
}else {
    echo "
        <script>
            alert ('data gagal diubah');
            document.location.href = 'tahunan.php';
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
    <h2 class="alert alert-success text-center mt-3">Tambah Buku Literasi Umum</h1>
    
    <form action="" method="post">
    
           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kode_buku_literasi">Kode Buku Literasi : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Kode Buku..." name="kode_buku_literasi" id="kode_buku_literasi">
            </div>
                <div class="form-group col-md-6">
                  <label for="kategori">Kategori : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Kategori..." name="kategori" id="kategori">
                </div>
           </div>

            <div class="form-group text-center">
                  <label for="judul_buku_literasi">Judul Buku Literasi : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Judul Buku..." name="judul_buku_literasi" id="judul_buku_literasi">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="penerbit">Penerbit : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Penerbit Buku..." name="penerbit" id="penerbit">
                </div>

                <div class="form-group col-md-4">
                  <label for="tahun_terbit">Tahun Terbit : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Tahun Terbit..." name="tahun_terbit" id="tahun_terbit">
                </div>

                <div class="form-group col-md-4">
                  <label for="no_rak">No Rak : </label>
                  <input type="text" class="form-control" placeholder="Masukkan Nomor Rak..." name="no_rak" id="no_rak">
                </div>
            </div>

            <div class="form-group text-center">
              <label for="deskripsi_buku">Deskripsi Buku : </label>
              <textarea type="text" name="deskripsi_buku" id="deskripsi_buku" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
              <label for="gambar_sampul">Gambar Sampul : </label>
              <input type="file" class="form-control-file" name="gambar_sampul" id="gambar_sampul">
              <small>(Upload File Dengan Ukuran Maksiman 2 MB)</small>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
            </div>
        <br><br>
    </div>
                
</body>
</html>