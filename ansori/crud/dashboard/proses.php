<?php 

require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepedencyException;



if (isset($_POST['tambah'])) {
	$uuid = Uuid::uuid4()->toString();
	$nip = trim(mysqli_real_escape_string($conn, $_POST['nip']));
	$nama = trim(mysqli_real_escape_string( $conn, $_POST['nama']));
	$alamat = trim(mysqli_real_escape_string( $conn, $_POST['alamat']));
	$tgl = trim(mysqli_real_escape_string( $conn, $_POST['tgl']));
	$no_hp = trim(mysqli_real_escape_string( $conn, $_POST['no_hp']));
	$nik = trim(mysqli_real_escape_string( $conn, $_POST['nik']));
	mysqli_query($conn, "INSERT INTO tb_pekerja (id_pekerja, nip, nama_pekerja, alamat, tgl, no_hp, nik) VALUES ('$uuid', '$nip', '$nama', '$alamat', '$tgl', '$no_hp', '$nik')") or die(mysqli_error($conn));
	echo "<script>window.location='data.php';</script>";

}else if (isset($_POST['ubah'])) {
	$id =  $_POST['id'];
	$nip = trim(mysqli_real_escape_string($conn, $_POST['nip']));
	$nama = trim(mysqli_real_escape_string( $conn, $_POST['nama']));
	$alamat = trim(mysqli_real_escape_string( $conn, $_POST['alamat']));
	$tgl = trim(mysqli_real_escape_string( $conn, $_POST['tgl']));
	$no_hp = trim(mysqli_real_escape_string( $conn, $_POST['no_hp']));
	$nik = trim(mysqli_real_escape_string( $conn, $_POST['nik']));
	mysqli_query($conn, "UPDATE tb_pekerja SET nip = '$nip', nama_pekerja = '$nama', alamat ='$alamat', tgl = '$tgl', no_hp = $no_hp, nik ='$nik' WHERE id_pekerja = '$id'") or die(myqli_error($conn));
	echo "<script>window.location='data.php';</script>";
}


?>
