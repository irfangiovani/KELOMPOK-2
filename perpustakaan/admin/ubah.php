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
    <title>Ubah Buku tahunan siswa</title>
</head>
<body>
    <h1>Ubah Buku tahunan siswa</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="id_judul_buku_tahunan">Kode Buku Literasi : </label>
                <input type="text" name="id_judul_buku_tahunan" id="id_judul_buku_tahunan">
            </li>
             <li>
                <label for="judul_buku_tahunan">judul Buku Literasi : </label>
                <input type="text" name="judul_buku_tahunan" id="judul_buku_tahunan">
            </li>
            <li>
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit">
            </li>
            <li>
                <label for="tahun_terbit">Tahun Terbit : </label>
                <input type="text" name="tahun_terbit" id="tahun_terbit">
            </li>
            <li>
                <label for="untuk_kelas">No Rak : </label>
                <input type="text" name="untuk_kelas" id="untuk_kelas">
            </li>
            <li>
                <label for="gambar_sampul">Gambar Sampul : </label>
                <input type="text" name="gambar_sampul" id="gambar_sampul">
            </li>
            <li>
                <label for="stok">Deskripsi Buku : </label>
                <input type="text" name="stok" id="stok">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
                
</body>
</html>