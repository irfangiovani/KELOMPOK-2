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
 
 <h2>mengenal</h2>
 <?php
//mengenal array 
$nama = array('irfan','erlian','akmal','arga');


//menampilkan data array dengan nomor urut 2
echo $nama[2];
 ?>


<h2>penamaan array</h2>
<?php
//penamaan isi array
$nama['irfan'] = "kepribadiaan ganda";
$nama['erlian'] = "introvet";
$nama['akmal'] = "ekstrovet";
$nama['arga'] = "nggak punya kepribadiaan";

//menampikan isi array yang bernama akmal
echo $nama['akmal'];
?>
<h2>pelurlangan</h2>
while(kondisi){
    statement
}
<?php
// perulangan
$x = 1;

while($x <= 10){
    echo " Angka $x <br>";
    $x++;
}
?>


<h2>aritmaatika</h2>
<?php 
$a = 4;
$b = 19;
//menjumlahkan variabel a dengan variabel b
echo $a + $b;
?>
<?php 
$a = 4;
$b = 19;
//Operator pengurangan variabel a dengan variabel b
echo $a - $a;
?>


<h2>form</h2>
<!-- penanganan form dengan method POST -->
<form method="post" action="tampil.php">
	<label>Masukkan Nama</label><br/>
	<input type="text" name="nama"><br/>
	<label>Masukkan Usia</label><br/>
	<input type="text" name="usia"><br/>	
	<input type="submit" value="oke">
</form>

<?php 
echo "<h1> ISI FILE TES.PHP </h1>";
?>

