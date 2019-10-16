<?php
require 'koneksi.php';
if(isset($_POST['tambah'])){

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

mysqli_query($koneksi, "INSERT INTO identitas VALUES ('$nama', '$alamat', '$nim', '$jurusan')") or die(mysqli_error($koneksi));
header("Location:crut.php");
}
?>