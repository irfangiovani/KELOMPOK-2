<?php
//koneksidm
$host = "localhost";
$user = "root";
$password = "";
$database = "perpustakaan";


$koneksi = mysqli_connect($host, $user, $password, $database);
//kekonesi
if ($koneksi ->connect_error){
    die("koneksi gagal". $koneksi ->connect_error);
}
echo"koneksi berhasil";
?>