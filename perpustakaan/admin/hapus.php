<?php
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

// mysqli_query($conn, "DELETE FROM buku_tahunan_siswa WHERE'$_GET[id]' ");
// return mysqli_affected_rows($conn);

$id = $_GET['id'];
$Q=mysqli_query($conn, "DELETE FROM buku_tahunan_siswa WHERE id_judul_buku_tahunan='$id'");

if( $Q){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'tahunan.php';
        </script>
        ";
}else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'tahunan.php';
        </script>
        ";
}
?>
