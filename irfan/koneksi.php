<?php
//koneksidm
$host = "localhost";
$user = "root";
$password = "";
$database = "irfan";


$koneksi = mysqli_connect($host, $user, $password, $database);
//kekonesi
if ($koneksi ->connect_error){
    die("koneksi gagal". $koneksi ->connect_error);
}
echo"koneksi berhasil";
?>


<form action= "" menthod="POST">
    Username : <br>
    <input type="text" name="x" placeholder="Username" class="form">
    <br>
    password:<br>
    <input type="text" name="y" placeholder="password" class="form">
    <br><br>
    <input type="submit" name="lo" value="Masuk" class="btn btn-primary">
  
</form>