<!DOCTYPE html>
<head>
    <title>Pertemuan Rabu 02-10-2019</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="color:red">Selamat Belajar Bahasa PHP</h1>
    <h2 style="color:blue">Nama Saya: Yudi Iriyanto</h2>
    <h3>Politeknik Negeri Jember</h3>

    <?php
        echo "Hello World </br></br>";
        $tempat = "di Polije";
        $Tempat = "di Polije Dua";
        $TempaT = "di Polije Tiga";

        echo "<h1 style='color:red'>Selamat Belajar Pemrograman PHP ".$tempat."</h1>";
        ECHO "<h2 style='color:blue'>Selamat Belajar pemrograman PHP</h2>";
        EcHo "<h3>Selamat Belajar HTML ".$Tempat."</h3>";
        echo $TempaT."</br></br>";
        echo date("Y/m/d")."</br></br>";

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
        }

        //Konstanta
        define("Khafid", "Selamat datang di Polije!");
        echo "</br></br>".Khafid;

        //Fungsi
        function khafid(){
            echo "</br></br>".Khafid." Dua";
        }

        khafid();

?>
   

       
             
    
</body>
</html>
