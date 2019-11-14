<?php
  include 'functions.php';
  $id = $_GET['id'];
  $qe = mysqli_query($conn, "SELECT * FROM buku_literasi_umum WHERE kode_buku_literasi = '$id'");
  $data = mysqli_fetch_array($qe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Tambah Buku Literasi Umum</title>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-success text-center mt-3">Tambah Buku Literasi Umum</h1>
    
    <form action="" method="post">
    
           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kode_buku_literasi">Kode Buku Literasi : </label>
                  <input type="text" class="form-control"  name="kode_buku_literasi" value ="<?php echo $data['kode_buku_literasi'] ?>" id="kode_buku_literasi">
            </div>
                <div class="form-group col-md-6">
                  <label for="kategori">Kategori : </label> <a href="kategori.php" class="btn btn-warning" title="tambah_kategori" >Tambah Kategori</a>
                  <input type="text" class="form-control" value ="<?php echo $data['kategori'] ?>" name="kategori" id="kategori">
                 
                </div>
           </div>

            <div class="form-group text-center">
                  <label for="judul_buku_literasi">Judul Buku Literasi : </label>
                  <input type="text" class="form-control" value ="<?php echo $data['judul_buku_literasi'] ?>" name="judul_buku_literasi" id="judul_buku_literasi">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="penerbit">Penerbit : </label>
                  <input type="text" class="form-control"value ="<?php echo $data['penerbit'] ?>" name="penerbit" id="penerbit">
                </div>

                <div class="form-group col-md-4">
                  <label for="tahun_terbit">Tahun Terbit : </label>
                  <input type="text" class="form-control" value ="<?php echo $data['tahun_terbit'] ?>" name="tahun_terbit" id="tahun_terbit">
                </div>

                <div class="form-group col-md-4">
                  <label for="no_rak">No Rak : </label>
                  <input type="text" class="form-control" value ="<?php echo $data['no_rak'] ?>" name="no_rak" id="no_rak">
                </div>
            </div>

            <div class="form-group text-center">
              <label for="deskripsi_buku">Deskripsi Buku : </label>
              <textarea type="text" value ="<?php echo $data['deskripsi_buku'] ?>" name="deskripsi_buku" id="deskripsi_buku" class="form-control" rows="5" > <?php echo $data['deskripsi_buku'] ?></textarea>
            </div>

            <div class="form-group">
              <label for="gambar_sampul">Gambar Sampul : <?php echo $data['gambar_sampul'] ?></label>
              <input type="file" class="form-control-file" name="gambar_sampul" id="gambar_sampul">
              <small>(Upload File Dengan Ukuran Maksiman 2 MB)</small>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="edit">Edit Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
            </div>
        <br><br>
    </div>
    <?php
    if( isset($_POST["edit"])){
    // ambil data dari tiap elemen dalam form
    $kode_buku_literasi = $_POST["kode_buku_literasi"];
    $judul_buku_literasi = $_POST["judul_buku_literasi"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $no_rak = $_POST["no_rak"];
    $kategori = $_POST["kategori"];
    $gambar_sampul = $_POST["gambar_sampul"];
    $deskripsi_buku = $_POST["deskripsi_buku"];
    $tambah = mysqli_query($conn, "UPDATE buku_literasi_umum SET kode_buku_literasi='$kode_buku_literasi', judul_buku_literasi='$judul_buku_literasi', 
    penerbit='$penerbit', tahun_terbit='$tahun_terbit', no_rak='$no_rak', kategori='$kategori', gambar_sampul='$gambar_sampul', deskripsi_buku='$deskripsi_buku' WHERE kode_buku_literasi = '$id'");

    if($tambah){
      ?>
      <script type="text/javascript">
        alert('Edit Data Berhasil');
        document.location.href="literasi.php";
      </script>
      <?php
    }else {
      echo "gagal mengedit data!!!";
    }

    }
    ?>
       
</body>
</html>