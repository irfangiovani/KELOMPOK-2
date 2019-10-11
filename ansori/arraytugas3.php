<?php 

echo "Hallowww Kelas </br></br>";
    $tempat = "di Polije";
	$Tempat = "di Polije Dua";
	$TempaT = "di Polije Tiga";

	echo "<h1 style='color:red'>Selamat Belajar HTML ".$tempat."</h1>";
	ECHO "<h2 style='color:blue'>Selamat Belajar HTML</h2>";
	EcHo "<h3>Selamat Belajar HTML ".$Tempat."</h3>";
	echo $TempaT."</br></br>";
	echo date("Y/m/d")."</br></br><hr>";
//Penjumlahan
	$a = 10; $b = $c = 20; $d = 2;
	$jumlah = ($a + $b)/$d;

	echo $jumlah."</br></br>";

	for ($x = 0; $x <= 10; $x++) {
    	echo "Tempat Ke - ".$x."<br>";
		}

	$t = date("H");

	if ($t < "20") {
    	echo "Selamat Pagi!";
	}?>
	<hr>
	<h2>ini belajar membuat form - PHP </h2>
	 <form action="proses.php" method="get">
	 Nama: <input type="text" name="nama" />
	 <br />
	 E-Mail: <input type="text" name="email" />
	 <br />
	 <input type="submit" value="login" >
	 </form>
<?php
//membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','apel','anggur');
//menampilkan data array dengan nomor urut 2
echo $buah[2];
echo "<br>ini array biasa<hr><br>";
	
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";
 
// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
echo "<br>ini array memanggil dengan penamanaan<hr><br>";


 ?>