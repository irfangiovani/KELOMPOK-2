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
    <title>Tambah Buku Literasi Umum</title>
</head>
<body>
    <h1>Tambah Buku Literasi Umum</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="kode_buku_literasi">Kode Buku Literasi : </label>
                <input type="text" name="kode_buku_literasi" id="kode_buku_literasi">
            </li>
             <li>
                <label for="judul_buku_literasi">judul Buku Literasi : </label>
                <input type="text" name="judul_buku_literasi" id="judul_buku_literasi">
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
                <label for="no_rak">No Rak : </label>
                <input type="text" name="no_rak" id="no_rak">
            </li>
            <li>
                <label for="kategori">Kategori : </label>
                <input type="text" name="kategori" id="kategori">
            </li>
            <li>
                <label for="gambar_sampul">Gambar Sampul : </label>
                <input type="text" name="gambar_sampul" id="gambar_sampul">
            </li>
            <li>
                <label for="deskripsi_buku">Deskripsi Buku : </label>
                <input type="text" name="deskripsi_buku" id="deskripsi_buku">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
                
</body>
</html>