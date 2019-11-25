<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $nama_peminjam = $_POST["nama_peminjam"];
    $kode_buku = $_POST["kode_buku"];
    $tgl_pinjam = Date('Y-m-d');
    $tgl_kembali = Date('Y-m-d');
    $notifikasi = $_POST["notifikasi"];
   
    //query insert data
    mysqli_query($conn, "INSERT INTO peminjaman_buku_literasi VALUES (null,'$nama_peminjam', '$kode_buku','$tgl_pinjam','$tgl_kembali', '$notifikasi')");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Peminjaman Buku Literasi Umum</title>
</head>
<body> 
    <h1>Tambah Peminjaman Buku Literasi Umum</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <label for="nama_peminjam">Nama Peminjam : </label> 
                    <select class="form-control" name="nama_peminjam" id="nama_peminjam" required >
                    <option value="">- Nama Peminjam -</option>
                    <?php
                    $sql_member = mysqli_query($conn, "SELECT * FROM member_perpus") or die (mysqli_query($conn));
                    while ($data_member = mysqli_fetch_array($sql_member)){
                      echo '<option value="'.$data_member['nis'].'">' .$data_member['nama_siswa']. '</option>'; 
                    }
                    ?>
                </select>
                </td>
            </li>
             <li>
                    <label for="kode_buku">Kode_buku : </label> 
                    <select class="form-control" name="kode_buku" id="kode_buku" required >
                    <option value="">- Kode_buku -</option>
                    <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM buku_literasi_umum") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['kode_buku_literasi'].'">' .$data_kode['kode_buku_literasi']. '</option>'; 
                    }
                    ?>
                </select>
            
            </li>
            <li>
              <label for="notifikasi">Notifikasi : </label>
              <input type="text" name="notifikasi" id="notifikasi" class="form-control">
            </li>

            <li>
              <label for="notifikasi">NIS : </label>
              <input type="text" name="notifikasi" id="notifikasi" class="form-control">

            <li>
    
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
                
</body>
</html>