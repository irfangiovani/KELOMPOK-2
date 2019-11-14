<?php
session_start();
include "../admin/functions.php";
//cek cookie
if (isset($_COOKIE['id']) AND isset ($_COOKIE['key'])){
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];



	//ambil username berdasarkan id
	$result = mysqli_query($conn,"SELECT username FROM pustakawan WHERE nip =$id");
	$row = mysqli_fetch_assoc($result);
	
	//cek cookie dan username
	if ($key === hash('sha256', $row['username']) ){
		$_SESSION['login'] =true;
	}


}


if (isset($_SESSION["login"])){
header("location: index.php");
exit;


}

if (isset($_POST["login"])){
$username = $_POST["username"];
$password = $_POST["password"];
 if($username =='admin' ){
	 if ($password == 'admin'){
		header('Location:../admin/index.html');exit;
	
	}
	else{
		echo"password salah";
		exit;
	}

 } else{
	 echo "username tidak terddaftar";
 }
}

// $result = mysqli_query($conn, "SELECT * FROM  pustakawan WHERE username='$username' ");

// if (mysqli_num_rows($result) === 1){
// //cek password

// 	$row = mysqli_fetch_assoc($result);
// if (password_verify($password, $row['password'])){
// //set session
// $_SESSION["login"] = true;

// //cek remember me

// if (isset($_POST['remember'])){
// //buat cookie

// setcookie('id', $row['id'], time()+60);
// setcookie('key' , hash( 'sha256', $row['username']), time()+60);



// }

// header('Location:../admin/index.html');
// exit;
//}

// $error = true;


//}
//echo "username dan password salah";	


//}
//  cek username
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type ="submit"class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>