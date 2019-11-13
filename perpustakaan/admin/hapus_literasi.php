<?php 
require 'functions.php';

$ambil = $conn->query("SELECT * FROM buku_literasi_umum WHERE kode_buku_literasi='$_GET[id]'");
$row = $ambil->fetch_assoc();
$fotoproduk = $row['gambar_sampul'];
if (file_exists("img/literasi/$fotoproduk"))
{
	unlink("img/literasi/$fotoproduk");
}

$conn->query("DELETE FROM buku_literasi_umum WHERE kode_buku_literasi= '$_GET[id]'");

echo "<script>alert('produk terhapus');</script>";
echo "<script>location='literasi.php';</script>";
 ?>
}