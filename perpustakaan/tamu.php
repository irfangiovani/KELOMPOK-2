<?php
$conn = mysqli_connect ("localhost" , "root","", "perpustakaan");
//cek tombol submit ditekan atau tidak
if( isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $id_tamu = $_POST["id_tamu"];
    $nama_tamu = $_POST["nama_tamu"];
    $delegasi = $_POST["delegasi"];
    $kepentingan = $_POST["kepentingan"];
    

    //query insert data
    mysqli_query($conn, "INSERT INTO tamu VALUES ('$id_tamu', '$nama_tamu','$delegasi','$kepentingan')");

    

    // cek keberhasilan tambah data
    if( mysqli_affected_rows($conn) > 0 ) {
        echo "berhasil";
    } else {
        echo "gagal!";
        echo "<br>";
        echo mysqli_error($conn);
    }
    }

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/register_member/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/register_member/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/register_member/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/register_member/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action = ""method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ID TAMU" name="id_tamu" id="id_tamu">
                        </div>
                    <form method="POST">
                        <div class="input-group">
                             <input class="input--style-1" type="text" placeholder="NAMA" name="nama_tamu" id="nama_tamu">
                        </div>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="DELEGASI" name="delegasi" id="delegasi">
                        </div>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="KEPENTINGAN" name="kepentingan" id="kepentingan">
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/register_member/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/register_member/select2/select2.min.js"></script>
    <script src="vendor/register_member/datepicker/moment.min.js"></script>
    <script src="vendor/register_member/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/register_member/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
