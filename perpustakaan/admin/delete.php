<?php
include "tahunan.php";
//get the value from form update
 $no = $_GET['id_judul_buku_tahunan']; //get the no which will deleted
 
//query for update data in database
 $query = "DELETE from buku_tahunan_siswa WHERE no = '$no'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "tahunan.php";
	echo "<h4> delete data success </h4>";
}
?>