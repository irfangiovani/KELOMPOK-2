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

function tambahmap($datamap) {
	global $conn;

    $id_judul_buku_mapel = htmlspecialchars($datamap["id_judul_buku_mapel"]);
    $judul_buku_mapel = htmlspecialchars($datamap["judul_buku_mapel"]);
    $id_penerbit = htmlspecialchars($datamap["id_penerbit"]);
    $tahun_terbit = htmlspecialchars($datamap["tahun_terbit"]);
    $untuk_kelas = htmlspecialchars($datamap["untuk_kelas"]);

    // upload gambar
    $gambar_sampul = uploadmap();
    if( !$gambar_sampul ) {
    	return false;
    }

    $stok = htmlspecialchars($datamap["stok"]);

    $query = "INSERT INTO buku_mapel_kelas 
              VALUES
              ('$id_judul_buku_mapel', '$judul_buku_mapel', '$id_penerbit', '$tahun_terbit', '$untuk_kelas', '$gambar_sampul', '$stok')
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadmap() {

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

    move_uploaded_file($tmpName, 'img/mapel/' . $namaFileBaru);

    return $namaFileBaru;

}




?>