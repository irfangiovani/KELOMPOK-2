<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
  include 'functions.php';
  $id = $_GET["id"];
  $data = query("SELECT * FROM buku_mapel_kelas WHERE id_judul_buku_mapel = '$id'")[0];

  if( isset($_POST["submit"]) ) {

  if( ubahmapel($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'mapel.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'mapel.php';
        </script>
    ";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Tambah Peminjaman Buku Mapel</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-danger text-center mt-3">Ubah Buku Mata Pelajaran</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="id_judul_buku_mapel">Id Judul Buku Mapel : </label>
                  <input type="hidden" class="form-control" name="id_judul_buku_mapel" value="<?= $data['id_judul_buku_mapel']; ?>" id="id_judul_buku_mapel">
                  <input type="hidden" class="form-control"  name="gambarLama" value ="<?php echo $data['gambar_sampul']; ?>" id="id_judul_buku_mapel">
                </div>
                <div class="form-group col-md-4">
                  <label for="untuk_kelas">Untuk Kelas : </label>
                  <input type="text" class="form-control" value="<?php echo $data['untuk_kelas'] ?>" name="untuk_kelas" id="untuk_kelas">
                </div>

                <div class="form-group col-md-4">
                  <label for="id_penerbit">Penerbit : </label> <a href="penerbit.php" class="btn btn-warning" title="tambah_penerbit">Tambah Penerbit</a>
                  <input type="text" class="form-control" value ="<?php echo $data['penerbit'] ?>" name="penerbit" id="penerbit">
                </div>
            </div>
            <div class="form-group text-center">
                  <label for="judul_buku_mapel">Judul Buku Mapel : </label>
                  <input type="text" class="form-control" value ="<?php echo $data['judul_buku_mapel']?>" name="judul_buku_mapel" id="judul_buku_mapel">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tahun_terbit">Tahun Terbit : </label>
              <input type="text" class="form-control" value ="<?php echo $data['tahun_terbit'] ?>" name="tahun_terbit" id="tahun_terbit">
            </div>
            <div class="form-group col-md-6">
              <label for="stok">Stok : </label>
              <input type="text" class="form-control" value ="<?php echo $data['stok'] ?>" name="stok" id="stok">
            </div>
            </div>
            <div class="form-group">
              <label for="gambar_sampul">Gambar Sampul : <?php echo $data['gambar_sampul'] ?></label><br>
              <img src="img/mapel/<?= $data['gambar_sampul'] ?>" width="60">
              <input type="file" name="gambar_sampul" class="form-control-file" id="gambar_sampul">
              <small>(Upload File Dengan Ukuran Maksiman 1 MB)</small>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
              <a href="mapel.php" class="btn btn-success">Kembali</a>
            </div>

        </form>
    </div>
</body>
</html>