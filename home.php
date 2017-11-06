<!DOCTYPE html>
	<html>
		<head>
			<title>Home</title>
			<link rel="stylesheet" type="text/css" href="Assets\css\font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="Assets\css\style.css">
			<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
			<script src="Assets/js/jquery-3.2.1.min.js"></script>
			<style type="text/css">
				.menudashboard a
				{	
					width: 100vh;
					background-color: pink;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
			</style>
		</head>
		<body style="background-color: white;">
			<div class="row">
				<!-- ini yang menampilkan menu menu yang ada -->
				<div class="col-md-2" style="background-color: #2c3e50; height: 100vh;">

					<!-- Header Dashboard Menu -->
					<h1 style="color: #e74c3c; margin-left: 10px;">Dashboard</h1> <br>

					<!-- Menu Utama -->
					<div class="menudashboard">
						<a href="#">Home</a><br>
						<a href="menu_Account.php">Account</a><br>
						<a href="menu_test.php">Test</a>
					</div>
					
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1; height: 100vh;">
					<?php 
					session_start();
					echo $_SESSION['username'];
					?>
				</div>
			</div>
		</body>
	</html>
