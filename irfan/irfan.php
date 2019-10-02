<!DOCTYPE HTML>
<html>
<head>
  <title>hallo word</title>
</head>

<body bgcolor="cyan"></body>
<h1><center></center></h1>


<?php
echo "hallo word </br></br>";
$tempat = "tempat di polije";
$tempat = "tempat di sitibondo";
$tempat = "petanicoding";


echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<h1 style='color:red'>Selamat Belajar PHP ".$tempat."</h1>";
ECHO "<h2 style='color:blue'>Selamat Belajar PHP</h2>";
echo "<h1> belajar html</h1>".$tempat."</h1>";

//PENJUALAN
$a = 10; $b = $c =20; $d =2;
$jumlah = ($a + $b)/$d;

echo $jumlah. "</br></br>";

for ($x =0; $x <= 10; $x++){
echo "tempat ke - ".$x. "<br>";

}
$t = date("H");
if ($t <"20"){
    echo "ryan situbondo";
}
//Konstanta
define("irfan", "Selamat datang di Polije!");
echo "</br></br>".irfan;
//Fungsi
function irfan(){
    echo "</br></br>".irfan." Dua";
}

irfan();
?>


</body>
</html>
