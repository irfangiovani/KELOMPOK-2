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
    <title>Tambah Buku Literasi Umum</title>
</head>
<body>
    <h1>Tambah Buku Literasi Umum</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="id_judul_buku_mapel">Kode Buku Literasi : </label>
                <input type="text" name="id_judul_buku_mapel" id="id_judul_buku_mapel">
            </li>
             <li>
                <label for="judul_buku_mapel">judul Buku Literasi : </label>
                <input type="text" name="judul_buku_mapel" id="judul_buku_mapel">
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
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
                
</body>
</html>

           