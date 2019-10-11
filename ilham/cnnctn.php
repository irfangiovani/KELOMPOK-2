<?php 
//koneksi DB
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "data";

	$koneksi = mysqli_connect($host, $user, $password, $database);

	//check connection
	if ($koneksi->connect_error) {
		die("Koneksi Gagal: " . $koneksi->connect_error);
	}
	echo "Koneksi Berhasil";
 ?>