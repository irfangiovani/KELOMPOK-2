<?php 
// menghubungkan dengan database
include('koneksi.php');

//menyisipkan file lain
require('array.php');
require('while.php');
include('aritmatika.php');
require('penangananform.php');

//syntax di bawah adalah isi dari file index.php
echo "Belajar Include() dan Require()";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Gambar Buku</th>
			<th>Deskripsi Buku</th>	
            <th>Nama Rak</th>		
		</tr>
		<?php 
		$query_mysql = mysql_query("SELECT * FROM buku_literasi_umum")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['kode_buku_literasi']; ?></td>
			<td><?php echo $data['judul_buku_literasi']; ?></td>
			<td><?php echo $data['gambar_buku_literasi']; ?></td>
            <td><?php echo $data['deskripsi_buku']; ?></td>
            <td><?php echo $data['nama_rak']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
   
</body>
</html>
