<?php 
require 'functions.php';
$conn->query("DELETE FROM penerbit WHERE id_penerbit= '$_GET[id]'");
echo "<script>alert('Nama Penerbit Terhapus');</script>";
echo "<script>location='penerbit.php';</script>";
 ?>
}