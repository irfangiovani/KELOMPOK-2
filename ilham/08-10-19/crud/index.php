<?php 
require 'cnnctn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Membuat CRUD</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<br/>

	<table border="2" cellspacing="0">
		<thead>
			<th>nomor</th><th>nim</th><th>nama</th><th>alamat</th>
		</thead>
		<tbody>
			<?php
			$no = 1;
			$sql_mhs = mysqli_query($koneksi, "SELECT * FROM tb_mhs");
			while ($data = mysqli_fetch_array($sql_mhs)) {?>
				<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['nim'] ?></td>
				<td><?= $data['nama'] ?></td>
				<td><?= $data['alamat'] ?></td>
				</tr>
			<?php }	
			?>
		</tbody>
	</table>
	
</body>
</html>