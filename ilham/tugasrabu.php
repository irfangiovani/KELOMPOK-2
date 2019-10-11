<!DOCTYPE html>
<html>
<head>
	<title>Tugas Rabu</title>
</head>
<body>

	<h1 style="color:gold">Selamat Belajar HTML</h1>
	<h2 style="color:silver">Nama Saya: Ilham Robby Sanjaya</h2>
	<h3>Politeknik Negeri Jember</h3>

	<?php 
		echo "Hallo Ilham <br></br>";
		$tempat = "di Polije";
			$Tempat = "di Polije Dua";
			$TempaT = "di Polije Tiga";

			echo "<h1 style='color:gold'>Selamat Belajar HTML ".$tempat."</h1>";
			ECHO "<h2 style='color:silver'>Selamat Belajar HTML</h2>";
			EcHo "<h3>Selamat Belajar HTML".$Tempat."</h3>";
			echo $TempaT."</br></br>";
			echo date("Y/m/d")."</br></br>";

			$a = 10; $b = $c =20; $d = 2;
			$jumlah = ($a + $b)/$d;

			echo $jumlah."</br></br>";

			for ($x=0; $x <=10; $x++) { 
			echo "Tempat Ke - ".$x."</br>";
			}

			$t = date("H");

			if ($t < "20") {
				echo "Selamat Pagi";
			}

			define("ilham", "Selamat Datang di Polije!");
			echo "</br></br>".ilham;

			function ilham(){
				echo "</br></br>".ilham."Dua";
			}

			ilham();
	 ?>

</body>
</html>