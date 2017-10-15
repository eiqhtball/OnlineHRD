<?php
include 'db_connection.php';
$conn = OpenCon();
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
						<div class="banner">
							<p class="bannerregis" >
							Sign Up Here! <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</p>
						</div>
						  	
						<form class="formregis" style="background-color: #bdc3c7;">
							<div class="form-group">
								<label for="name">Nama Lengkap:</label>
								<input type="name" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="username" class="form-control" id="username">
							</div>
							<div class="form-group">
								<label for="email">E-mail:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd">
							</div>
							<button type="submit" class="btn btn-default">Sign up</button>
						</form>
							
						</div>
					</div>
				</div>
			</div>
			
		</body>
	</html>