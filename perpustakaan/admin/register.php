<?php
require 'functions.php';

if( isset($_POST["register"]) ){
    if(registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                  </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            display:block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="nip">nip :</label>
                <input type="number" name="nip" id="nip">
            </li>
            <li>
                <label for="nama_pustakawan"> nama lengkap :</label>
                <input type="text" name="nama_pustakawan" id="nama_pustakawan">
            </li>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
            
                
</body>
</html>