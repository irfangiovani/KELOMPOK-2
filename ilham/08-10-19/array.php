<h2>Membuat dan memanggil data pada array secara biasa</h2>
<?php 
	$sifat = array('pendiam','pemarah','penyabar','pemalu');
	echo $sifat[3];
?>

		<br><br>

<h2>Membuat dan memberi penamaan pada isi array</h2>
<?php 
	$sifat['pendiam'] = "adalah sifat seorang Dono";
	$sifat['pemarah'] = "adalah sifat seorang Kasino";
	$sifat['penyabar'] = "adalah sifat seorang Indro";
	$sifat['pemalu'] = "adalah sifat semua pemain Warkop";

	echo $sifat['pemalu'];
?>

		<br><br>

	<h2>Contoh menerapkan array dengan for</h2>
<?php 
	$sifat = array('pendiam','pemarah','penyabar','pemalu');
	for ($x=0;$x<count($sifat);$x++){ 
		# code...
		echo $sifat[$x]."<br/>";
	}
?>