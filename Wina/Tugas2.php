<!DOCTYPE HTML>
<html>
<head>
  <title>Selamat Belajar untuk Menjadi Seorang Programmer</title>
<style>
  body {
    background-color  : violet ;
  }

</style>
</head>
<body>
<h1><center>TUGAS 3 PHP SISTEM INFORMASI BERBASIS WEB</center></h1><hr>
<marquee behavior="alternate" direction="left">wina</marquee>

<h1 style = "color : red"> Selamat Belajar HTML </h1>
<h2 style = "color : blue"> Nama Saya : Aziza Wina Sriwinarsih </h2>
<h3> Politeknik Negeri Jember </h3>
    
    <?php
    echo "Welcome To Pemberi Harapan Palsu PHP</br></br>";
    $tempat = "di Polije" ;
        $tempat = "di Polije dua" ;
        $tempat = "di Polije tiga" ;

        echo "<h1 style='color ; red'>Selamat Belajar HTML".$tempat."</h1>" ;
        ECHO "<h2 style='color ; blue'>Selamat Belajar HTML</h2>" ;
        EcHo "<h3>  Selamat Belajar HTML".$tempat."</h3>" ;
        echo $tempat."</br></br>" ;
        echo date("Y/m/d")."</br></br>" ;

        //penjumlahan 
        $a = 10; $b = $c = 20; $d = 2;
        $jumlah = ($a + $b)/$d;

        echo $jumlah. "</br></br>";

        for ($x = 0; $x <= 10; $x++) {
        echo "Tempat Ke - ".$x. "<br>";
        }

        $t = date ("H") ;

        if ($t < "20")  {
        echo "Selamat Pagi" ;
        }

        //Konstanta
        define ("Wina"."Selamat Datang di Polije!") ;
        echo "</be></br>".Wina;

        //fungsi
        function Wina() {
          echo "</br></br>".Wina."Dua";
        }
    ?>
	

</body>
</html>
