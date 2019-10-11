<?php
//Koneksi DB
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "koneksi";

    $koneksi = mysqli_connect($host, $user, $password, $database);

    // Check Connection
    if ($koneksi->connect_error) {
        die("koneksi gagal: " . $koneksi->connect_error);
    }
    echo "koneksi berhasil";

?>

