<?php
include 'db_connection.php';
$conn = OpenCon();

if (isset($_POST['submit'])) {
	// var_dump($_POST);
	// exit;

	$fullname = $_POST['fullname'];
	$noktp = $_POST['ktp'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


	$result = $conn->query("INSERT INTO t_user (userID, noktp,fullname, username, email, gender, password) 
		VALUES (null, '$noktp','$fullname','$username','$email','$gender','$password')");

	
	if ($result) {
		echo '<script>alert("pendaftaran sukses!")</script>';
	} else {
		echo '<script>alert("pendaftaran gagal!")</script>';
	}
}



CloseCon($conn);

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Login</title>
			<link rel="stylesheet" type="text/css" href="Assets\css\font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="Assets\css\style.css">
			<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
			<script src="Assets/js/jquery-3.2.1.min.js"></script>
		</head>
		<body>
			<!-- <div class="navbar">
				<div class="row"s>
					<div class="col-md-10">
						<a class="navbar-brand" href="#">Online HRD</a>
					</div>
					<div class="col-md-2">
						<ul class="nav nav-pills">
						  <li role="presentation"><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
			</div> -->

			<div class="container" style="margin-top: 60px;">
				<div class="row">
				  	<div class="col-md-7">
				  		
				  	</div>
					  
					<div class="col-md-5" style="padding: 0px;">
						<div class="banner" style="border-radius: 10px; background-color:rgb(255,255,255); ">
							<p class="bannerregis" style="border-radius: 10px;" >
							Sign Up Here! <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</p>
						</div>
						<div class="regiss">
							
						</div>
						<form class="formregis" style="background-color: #bdc3c7; border-radius: 10px;" method="post">
							<div class="form-group">
								<label for="noktp">No.KTP:</label>
								<input type="text" class="form-control" id="noktp" name="ktp">
							</div>
							<div class="form-group">
								<label for="name">Nama Lengkap:</label>
								<input type="name" class="form-control" id="name" name="fullname">
							</div>
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="username" class="form-control" id="username" name="username">
							</div>
							<div class="form-group">
								<label for="email">E-mail:</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="gender" name="gender">
								<label for="name">Gender</label><br>
							  	<input type="radio" name="gender" value="Male"><label for="name">Male</label><br></input>
							  	<input type="radio" name="gender" value="Female"><label for="name">Female</label><br></input>
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd" name="password">
							</div>
							<button type="submit" class="btn btn-default" name="submit">Sign up</button>
						</form>
							
						</div>
					</div>
				</div>
			</div>
			
		</body>
	</html>