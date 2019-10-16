<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Data Mahasiswa</title>
</head>
<body bgcolor="cyan">
    <h2>Data Mahasiswa</h2>
    <a href="tambah.php">tambah</a>
    
    <table border= "1" cellpadding="10">
        <tr>
            <td>No</td>
            <td>nama</td>
            <td>alamat</td>
            <td>Nim</td>
            <td>jurusan</td>
            <td>opsi</td>
        
         </tr>
         <?php
         include 'koneksi.php';
         $no = 1;
         $select = mysqli_query($koneksi, "SELECT * FROM identitas");
         while($hasil = mysqli_fetch_array($select)){
         ?>
<tr>
            <td><?php echo $no++?></td>
            <td><?php echo$hasil['nama']?></td>
            <td><?php echo$hasil['alamat']?></td>
            <td><?php echo$hasil['nim']?></td>
            <td><?php echo$hasil['jurusan']?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
                
            </td>
<?php }?>

            
</tr>
</table>
</body>
</html>