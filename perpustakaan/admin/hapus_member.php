<?php 
session_start();
if( !isset($_SESSION["login"])){
	header("location: loginadmin.php");
	exit;
}

require 'functions.php';

$ambil = $conn->query("SELECT * FROM member_perpus WHERE nis='$_GET[id]'");
$row = $ambil->fetch_assoc();


$conn->query("DELETE FROM member_perpus WHERE nis= '$_GET[id]'");

echo "<script>alert('produk terhapus');</script>";
echo "<script>location='data_member.php';</script>";
 ?>
