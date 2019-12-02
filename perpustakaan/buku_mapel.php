<?php
require 'admin/functions.php';
$buku_mapel_user = query("SELECT * FROM peminjaman_buku_mapel");

$buku_mapel_user = query ("SELECT a.id_pinjam_buku_mapel, a.nama_peminjam, a.waktu_peminjaman, a.banyak_buku, a.notifikasi, b.judul_buku_mapel as id_judul_buku_mapel, c.kode_kelas as kode_kelas, 
FROM peminjaman_buku_mapel a LEFT JOIN buku_mapel_kelas b on b.id_judul_buku_mapel = a.id_judul_buku_mapel LEFT JOIN kelas c on c.kode_kelas = a.kode_kelas ORDER BY a.id_pinjam_buku_mapel ASC"); 


?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>

<table class="table table-striped table-bordered table-hover ">
        <tr>
			<th>no</th>
            <th>ID Pinjam Mapel</th>
            <th>Kode Judul Buku Mapel</th>
            <th>Kode Kelas</th>
            <th>Nama Peminjam</th>
            <th>Waktu Pinjam</th>
            <th>Sebanyak</th>
            <th>Status</th>
        </tr>
		<?php $i = 1; ?> 
        <?php
            foreach( $buku_mapel_user as $row) :
        ?>
        <tr>
			<td><?=$i; ?></td>
            <td><?php echo $row["id_pinjam_buku_mapel"]; ?></td>
            <td><?php echo $row["id_judul_buku_mapel"];?></td>
            <td><?php echo $row["kode_kelas"];?></td>
            <td><?php echo $row["nama_peminjam"];?></td>
            <td><?php echo $row["waktu_peminjaman"];?></td>
            <td><?php echo $row["banyak_buku"];?></td>
            <td><?php echo $row["notifikasi"];?></td>
        </tr>
			<?php $i++; ?>
			<?php endforeach; ?>
    </table>
</body>
</html>