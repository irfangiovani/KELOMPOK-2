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
    <input type="text" name="y" placeholder="password">
    <br><br>
    <input type="submit" name="lo" value="Masuk" class="btn btn-primary">
  
</form>

<?php
if(isset($_POST['lo'])){
    $username = filter_input(IMPUT_POST,'X', FILTER_SANITIZE_STRING);
    $password = filter_input(IMPUT_POST,'y', FILTER_SANITIZE_STRING);
 if ($username=="admin"&& $password=="root"){
     session_start();
     $_SESSION["user"] = $username;
     // header("Location: per8.php");
     echo "</br></br>Berhasil Login";
 } else{
     echo"</br></br>Gagal Login";
 
 }
}
?>
