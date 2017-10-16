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

			<div class="container" style="margin-top: 20px;">
				<div class="row">
				  	<div class="col-md-8" style="margin-top: 20px;">
				  		<img src="Assets/img/brand.png" style="width: 50%; height: 50%;"><br><br>
				  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
						    <div class="item active">
						      <img class="gambarslide" src="Assets/img/1.jpg" alt="Los Angeles">
						    </div>

						    <div class="item">
						      <img class="gambarslide" src="Assets/img/2.jpg" alt="Chicago">
						    </div>

						    <div class="item">
						      <img class="gambarslide" src="Assets/img/2.jpg" alt="New York">
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
				  	</div>
					  
					<div class="col-md-4" style="padding: 0px;">
						<div class="banner" style="border-radius: 10px; background-color: #E1FAFC; ">
							<p class="bannerregis" style="border-radius: 10px;" >
							Sign Up Here! <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</p>
						</div>

						<form class="formregis" style="background-color: #EEEEEE; border-radius: 10px;" method="post">
							<div class="form-group" style="margin-bottom: 0px;">
								<label>No.KTP:</label>
								<input type="text" class="form-control" id="noktp" name="ktp">
							</div>
							<div class="form-group" style="margin-bottom: 0px;">
								<label>Nama Lengkap:</label>
								<input type="name" class="form-control" id="name" name="fullname">
							</div>
							<div class="form-group" style="margin-bottom: 0px;">
								<label>Username:</label>
								<input type="username" class="form-control" id="username" name="username">
							</div>
							<div class="form-group" style="margin-bottom: 0px;">
								<label>E-mail:</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group" name="gender" style="margin-bottom: 0px;" >
								<label>Gender</label><br>
							  	<input type="radio" name="gender" value="Male"><label>Male</label></input>
							  	<input type="radio" name="gender" value="Female"><label>Female</label><br></input>
							</div>
							<div class="form-group" style="margin-bottom: 0px;" >
								<label>Password:</label>
								<input type="password" class="form-control" id="pwd" name="password">
							</div>
							<div class="form-group">
								<label>Re-Password:</label>
								<input type="password" class="form-control" id="re-pwd" name="re-password">
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Sign up</button>
						</form>
							
						</div>
					</div>
				</div>
			</div>
			
		</body>
	</html>