<!DOCTYPE html>
<html>
    <head>
        <title>peminjaman buku tahunan</title>
</head>
    <h2>Data Mahasiswa</h2>
    
    
    <table border= "1" cellpadding="10">
        <tr>
            <td>No</td>
            <td>ID</td>
            <td>nama buku</td>
            <td>tanggal </td>
            <td><i class="fas fa-bell-slash">notifikasi</td></i>
        
         </tr>
         <?php
         include 'koneksi.php';
         $no = 1;
         $select = mysqli_query($koneksi, "SELECT * FROM peminjam");
         while($hasil = mysqli_fetch_array($select)){
         ?>
<tr>
            
            <td><?php echo $no++?></td>
            <td><?php echo$hasil['ID']?></td>
            <td><?php echo$hasil['nama']?></td>
            <td><?php echo$hasil['nama_buku']?></td>
            <td><?php echo$hasil['tanggal']?></td>
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