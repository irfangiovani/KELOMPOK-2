<!DOCTYPE html>
<html>
    <head>
        <title>peminjaman buku tahunan</title>
</head>
    <h2>Data Mahasiswa</h2>
    
    
    <table border= "1" cellpadding="10">
        <tr>
            <td>No</td>
            <td>id pengembalian</td>
            <td>id pinjam</td>
            <td>tanggal pengembalian</td>
            <td>denda</td>
            <td>notifikasi</td>
        
         </tr>
         <?php
         include 'koneksi.php';
         $no = 1;
         $select = mysqli_query($koneksi, "SELECT * FROM pengembalian_buku_tahunan");
         while($hasil = mysqli_fetch_array($select)){
         ?>
<tr>
            <td><?php echo $no++?></td>
            <td><?php echo$hasil['id_pengembalian_buku_tahunan']?></td>
            <td><?php echo$hasil['id_peminjaman_buku_tahunan']?></td>
            <td><?php echo$hasil['tanggal_pengembalian']?></td>
            <td><?php echo$hasil['terlambat']?></td>
            <td><?php echo$hasil['denda']?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
                
            </td>
            <a href="tambah.php">tambah</a>
<?php }?>

            
</tr>
</table>
</body>
</html>