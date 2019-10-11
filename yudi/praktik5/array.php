<h2>array</h2>
<?php 
//membuat array yang berisi nama buah-buahan
$buah = array('kambing','sapi','burung','semut','lebah');
//count() untuk menghitung isi array.
for($x=0;$x<count($buah);$x++){
	echo $buah[$x]."<br/>";
}

?>