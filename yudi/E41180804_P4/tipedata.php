<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipe Data</title>
</head>
<body>
<?php 
$string = "Saya sedang belajar PHP";
// variabel tes di atas merupakan tipe data string karena berisi text atau kalimat.

$pertama = 12;
$kedua = 78;
//Kedua variabel di atas merupakan variabel yang bertipe data integer. 

$angka = 28.933;
//variabel di atas adalah variabel yang bertipe data float karena berisi bilangan desimal.

$x = false;
$y = true;
//variabel di atas bertipe data boolean karena berisi nilai benar atau salah.

$anggota = array("gajah","jerapah","singa");
//variabel anggota di atas adalah variabel yang bertipe data array karena memiliki banyak isi pada.
echo "tipe data string : ".$string."</br></br>";
echo "tipe data integer pertama : ".$pertama."kedua : ".$kedua."</br></br>";
echo "tipe data float : ".$angka."</br></br>";
echo "tipe data boolean : ".$x."</br></br>";
echo "tipe data array : ".$anggota[2]."</br></br>";

?>   
</body>
</html>

