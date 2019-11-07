<html>
  <head>
    <title>Form Input Penjualan</title>
  </head>
  <body>
    <?php
// define variables and set to empty values
$bul0 ="" ; $bul1 ="" ; $bul2 = "" ; $bul3 = "" ;
$x0= ""; $x1=""; $x2=""; $x3="";
$xy=""; $xy1=""; $xy2=""; $xy3="" ;
$totbul= ""; $toturut=""; $totx=""; $totxy="";
$nil_a="";
$nil_b="";
$november="";
$desember="";

$no=0;
$a =$no+1;
$b = $no+2;
$c= $no+3;
$d= $no+4;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bul0= test_input($_POST["bul0"]);
  $bul1 = test_input($_POST["bul1"]);
  $bul2 = test_input($_POST["bul2"]);
  $bul3 = test_input($_POST["bul3"]);


  $x0= $no*$no;
  $x1= $a*$a;
  $x2= $b*$b;
  $x3= $c*$c;
  $xy=$no*$bul0;
  $xy1= $a*$bul1;
  $xy2= $b*$bul2;
  $xy3= $c*$bul3;
  $totbul = $bul0+$bul1+$bul2+$bul3;
  $toturut = $no+$a+$b+$c;
  $totx= $x0+$x1+$x2+$x3;
  $totxy = $xy+$xy1+$xy2+$xy3;
  
  $nil_b= ((4*$totxy)-($toturut*$totbul))/((4*$totx)-($toturut*$toturut));
  $nil_a = ($totbul/4)-($nil_b*($toturut/4));

  $november = $nil_a+($nil_b*4);
  $desember = $nil_a+($nil_b*5);
 }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <h2>PHP Form Input</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <table>
      <tr>
        <td>Bulan Juli</td>
        <td>:</td>
        <td><input type="number" name="bul0"/></td>
        </tr>
      <tr>
        <td>Bulan Agustus</td>
        <td>:</td>
        <td><input type="number" name="bul1" /></td>
        </tr>
      <tr>
        <td>Bulan September</td>
        <td>:</td>
        <td><input type="number" name="bul2" /></td>
        </tr>
      <tr>
        <td>Bulan Oktober</td>
        <td>:</td>
        <td><input type="number" name="bul3" /></td>
        </tr>
      <tr>
          <td colspan=3 align="center"><input type="submit" name="submit" value="submit"> </td>          
          </tr>       
    </table>    
</form>
    <table border=1 cellspacing=0 align="center">
    <tr align="center">
    <td>Bulan</td>
    <td>input</td>
    <td>Bulan ke</td>
    <td> X^2</td>
    <td> XY </td>
  </tr>
    <tr> 
      <td>Juli</td>
      <?php 
      echo "<td>".$bul0."</td>"
      ?>
      <?php 
      echo "<td>".$no."</td>"
      ?>
      <?php 
      echo "<td>".$x0."</td>"
      ?>
      <?php 
      echo "<td>".$xy."</td>"
      ?>
    </tr>
    <tr>
      <td>Agustus</td>
      <?php 
      echo "<td>".$bul1."</td>"
      ?>
      <?php 
      echo "<td>".$a."</td>"
      ?>
       <?php 
      echo "<td>".$x1."</td>"
      ?>
      <?php 
      echo "<td>".$xy1."</td>"
      ?>
    </tr>
    <tr>
      <td>September</td>
      <?php 
      echo "<td>".$bul2."</td>"
      ?>
      <?php 
      echo "<td>".$b."</td>"
      ?>
      <?php 
      echo "<td>".$x2."</td>"
      ?>
      <?php 
      echo "<td>".$xy2."</td>"
      ?>
    </tr>
    <tr>
      <td>Oktober</td>
      <?php 
      echo "<td>".$bul3."</td>"
      ?>
      <?php 
      echo "<td>".$c."</td>"
      ?>
      <?php 
      echo "<td>".$x3."</td>"
      ?>
      <?php 
      echo "<td>".$xy3."</td>"
      ?>
    </tr>
    <tr>
      <td> Total</td>
      <td> <?php echo $totbul; ?></td>
      <td> <?php echo $toturut; ?></td>
      <td> <?php echo $totx; ?></td>
      <td> <?php echo $totxy; ?></td>
      <tr>
  </table>
<h1>Prediksi</h1>
Nilai A= <?php echo $nil_a;?> </br>
Nilai B= <?php echo $nil_b;?>
<table>
      <tr>
        
        <td>November</td>
        <td>:</td>
        <td><?php echo $november;?></td>
        </tr>
      <tr>
        <td>Desember</td>
        <td>:</td>
        <td> <?php echo $desember;?></td>
        </tr>
      <tr>
      </tr>
    </table>
  </body>
</html>
    