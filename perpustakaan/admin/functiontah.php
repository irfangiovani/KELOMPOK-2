<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;   
}

function cari($keyword){
    $query = "SELECT * FROM buku_tahunan_siswa
            WHERE
            judul_buku_tahunan LIKE '%$keyword%' 
            ";
    return query($query);
}

function tambahtah($datatah) {
	global $conn;

    $id_judul_buku_tahunan = htmlspecialchars($datatah["id_judul_buku_tahunan"]);
    $judul_buku_tahunan = htmlspecialchars($datatah["judul_buku_tahunan"]);
    $id_penerbit = htmlspecialchars($datatah["id_penerbit"]);
    $tahun_terbit = htmlspecialchars($datatah["tahun_terbit"]);
    $untuk_kelas = htmlspecialchars($datatah["untuk_kelas"]);

    // upload gambar
    $gambar_sampul = uploadtah();
    if( !$gambar_sampul ) {
        return false;
    }
    
    $stok = htmlspecialchars($datatah["stok"]);

    $query = "INSERT INTO buku_tahunan_siswa
              VALUES 
              ('$id_judul_buku_tahunan', '$judul_buku_tahunan', '$id_penerbit', '$tahun_terbit', '$untuk_kelas', '$gambar_sampul', '$stok')
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadtah() {

	$namaFile = $_FILES['gambar_sampul']['name'];
	$ukuranFile = $_FILES['gambar_sampul']['size'];
	$error = $_FILES['gambar_sampul']['error'];
	$tmpName = $_FILES['gambar_sampul']['tmp_name'];
    
	// cek jika tidak ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
              </script>";
        return false;
    }

    // cek hanya gambar yang boleh di upload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // jika lolos maka gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/tahunan/' . $namaFileBaru);

    return $namaFileBaru;

}

function terlambattah($tgl_dateline, $tgl_kembali ){

$tgl_dateline_pecah = explode("-", $tgl_dateline);
$tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline_pecah[1]."-".$tgl_dateline_pecah[0];

$tgl_kembali_pecah = explode("-", $tgl_kembali);
$tgl_kembali_pecah = $tgl_kembali_pecah[2]."-".$tgl_kembali_pecah[1]."-".$tgl_kembali_pecah[0];

$selisih = strtotime($tgl_kembali_pecah)-strtotime($tgl_dateline_pecah);

$selisih = $selisih/86400;

if ($selisih>=1) {
    $hasil_tgl = floor($selisih);
} else {
    $hasil_tgl = 0;
}
return $hasil_tgl;
}




?>