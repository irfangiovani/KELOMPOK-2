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
<html>
<head>
	<meta charset="utf-8">
<<<<<<< HEAD
	<title>Form-v7 by Colorlib</title>
=======
	<title>Form Register Admin</title>
>>>>>>> f8085086e78071f4074843397e90cff617debb2b
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/register/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/register/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/register/style.css"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
<<<<<<< HEAD
				<img src="img/register/form-v7.jpg" alt="form">
				<p class="text-1">Sign Up</p>
=======
				<img src="img/register/regadmin.jpg" alt="form">
				<p class="text-1"></p>
>>>>>>> f8085086e78071f4074843397e90cff617debb2b
				<p class="text-2">Privaci policy & Term of service</p>
			</div>
			<form class="form-detail" action="" method="post" id="myform">
				<div class="form-row">
					<label for="nip">NIP</label>
					<input type="text" name="nip" id="nip" class="input-text">
				</div>
				<div class="form-row">
					<label for="nama_pustakawan">NAMA PUSTAKAWAN</label>
					<input type="text" name="nama_pustakawan" id="nama_pustakawan" class="input-text">
				</div>
				<div class="form-row">
					<label for="username">USERNAME</label>
					<input type="text" name="username" id="username" class="input-text">
				</div>
				<!-- <div class="form-row">
					<label for="your_email">E-MAIL</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div> -->
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password" id="password" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="password2">CONFIRM PASSWORD</label>
					<input type="password" name="password2" id="password2" class="input-text" required>
				</div>
				<div class="form-row-last">
					<button type="submit" name="register" class="btn btn-success" >REGISTER</button>
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<!-- <script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    your_email: {
			      	required: true,
			      	email: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		username: {
		  			required: "Please enter an username"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		comfirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>