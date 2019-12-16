<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: loginadmin.php");
    exit;
}
require 'functions.php';
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $nama_peminjam = $_POST["buah"];
    $kode_buku = $_POST["id_kode_literasi"];
    $tgl_pinjam = Date('Y-m-d');
    $tgl_kembali =Date('Y-m-d', time()+604800);
      
   
    //query insert data
    $tambah = mysqli_query($conn, "INSERT INTO peminjaman_buku_literasi VALUES (NULL, '$kode_buku', '$nama_peminjam', '$tgl_pinjam', '$tgl_kembali', 'masa pinjam')");
    if($tambah){
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'peminjaman_literasi.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('gagal menambahkan data');
            document.location.href = 'tambah_pinjam_literasi.php';
        </script>
    ";
  }
}

echo Date('l, Y-m-d');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Tambah Peminjaman Literasi</title>
    <style>
            body {
            	font-family: 'Roboto', Arial, Sans-serif;
            	font-size: 15px;
            	font-weight: 400;
            }
            input[type=text] {
                border: 2px solid #bdbdbd;
                font-family: 'Roboto', Arial, Sans-serif;
            	font-size: 15px;
            	font-weight: 400;
                padding: .5em .75em;
                width: 300px;
            }
            input[type=text]:focus {
                border: 2px solid #757575;
            	outline: none;
            }
            .autocomplete-suggestions {
                border: 1px solid #999;
                background: #FFF;
                overflow: auto;
            }
            .autocomplete-suggestion {
                padding: 2px 5px;
                white-space: nowrap;
                overflow: hidden;
            }
            .autocomplete-selected {
                background: #F0F0F0;
            }
            .autocomplete-suggestions strong {
                font-weight: normal;
                color: #3399FF;
            }
            .autocomplete-group {
                padding: 2px 5px;
            }
            .autocomplete-group strong {
                display: block;
                border-bottom: 1px solid #000;
            }
        </style>
</head>
<body>
    <div class="container">
    <h2 class="alert alert-info text-center mt-3">Tambah Data Peminjaman Buku Literasi Umum</h2>
    <div class="pull-right">
    <form action="" method="post" enctype="multipart/form-data">
     
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_kode_nis"> Nama Siswa : </label> 
          <input type="text" id="buah" name="buah" placeholder="Nama Siswa" value="">
		      <div id="box_pencarian"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_kode_buku_literasi"> Judul Buku Literasi : </label>
            <select class="form-control" name="id_kode_literasi" id="id_kode_literasi" required >
              <option value="">- Pilih Judul Kode Literasi -</option>
                  <?php
                    $sql_kode = mysqli_query($conn, "SELECT * FROM buku_literasi_umum") or die (mysqli_query($conn));
                    while ($data_kode = mysqli_fetch_array($sql_kode)){
                      echo '<option value="'.$data_kode['kode_buku_literasi'].'">' .$data_kode['judul_buku_literasi']. '</option>'; 
                    }
                  ?>
            </select>
        </div>
      </div> 
      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="tanggal_peminjaman"> Tanggal Peminjaman : </label>
              <input type="text" class="form-control" placeholder = "<?php  echo Date('Y-m-d');?>" name="tanggal_peminjaman" id="tanggal_peminjaman" readonly>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="tanggal_hrs_kembali"> Tanggal Harus Kembali : </label>
              <input type="text" class="form-control" placeholder="<?php echo Date('Y-m-d', time()+604800); ?>" name="tanggal_hrs_kembali" id="tanggal_hrs_kembali" readonly>
        </div>
      </div>

      

      <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
              <button type="reset" class="btn btn-danger">RESET</button>
              <a href="peminjaman_literasi.php" class="btn btn-success">Kembali</a>
      </div>
  
        <br><br>
        
      
    </form>
    </div>
    </div>

     <!-- Memanggil jQuery.js -->
     <script src="js/autocomplete/jquery-3.2.1.min.js"></script>

<!-- Memanggil Autocomplete.js -->
<script src="js/autocomplete/jquery.autocomplete.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Selector input yang akan menampilkan autocomplete.
        $( "#buah" ).autocomplete({
            serviceUrl: "source.php",   // Kode php untuk prosesing data.
            dataType: "JSON",           // Tipe data JSON.
            onSelect: function (suggestion) {
                $( "#buah" ).val("" + suggestion.buah);
            }
        });
    })
</script>



                
</body>
</html>