<?php
$conn = mysqli_connect ("localhost" , "root","", "perpustakaan");
//cek tombol submit ditekan atau tidak
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $kode_buku_literasi = $_POST["kode_buku_literasi"];
    $judul_buku_literasi = $_POST["judul_buku_literasi"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $no_rak = $_POST["no_rak"];
    $kategori = $_POST["kategori"];
    $gambar_sampul = $_POST["gambar_sampul"];
    $deskripsi_buku = $_POST["deskripsi_buku"];

    //query insert data
    mysqli_query($conn, "INSERT INTO buku_literasi_umum VALUES ('$kode_buku_literasi', '$judul_buku_literasi','$penerbit','$tahun_terbit', '$no_rak', '$kategori', '$gambar_sampul','$deskripsi_buku')");

    

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