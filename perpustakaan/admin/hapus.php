<?php
require 'functions.php';

mysqli_query($conn, "DELETE FROM buku_tahunan_siswa WHERE id = $id");
return mysqli_affected_rows($conn);

$id = $_GET["id"];

if( hapus($id) > 0 ){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
}else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
}
?>
