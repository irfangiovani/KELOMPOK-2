<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table bolder= "1">
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
         $select = mysqli_query($conn, "SELECT * FROM identitas");
         while($hasil = mysqli_fetch_array($select)){}
         ?>
<tr>
            <td><?php echo $No++?></td>
            <td><?php echo$hasil['nama']?></td>
            <td><?php echo$hasil['alamat']?></td>
            <td><?php echo$hasil['nim']?></td>
            <td><?php echo$hasil['jurusan']?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
                
            </td>
</tr>
</table>
</body>
</html>