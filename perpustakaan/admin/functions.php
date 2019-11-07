<?php

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
    $query = "SELECT * FROM buku_literasi_umum
            WHERE
            judul_buku_literasi LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'
            ";
    return query($query);
}

//halaman register.php
function registrasi($data) {
    global $conn;

    $nip = ($data["nip"]);
    $nama_pustakawan = ($data["nama_pustakawan"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM pustakawan WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah terdaftar!')
              </script>";
        return false;
    }
    // cek konfirmasi password
    if( $password !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }
    
    //enskripsi passowrd
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan data pustakawan ke database
    mysqli_query($conn, "INSERT INTO pustakawan VALUES ('$nip', '$nama_pustakawan', '$username', '$password')");

    return mysqli_affected_rows($conn);

}


// function hapus($id) {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM buku_tahunan_siswa WHERE id = $id");
//     return mysqli_affected_rows($conn);
// }




?>