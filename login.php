<?php
include 'db_connection.php';
$conn = OpenCon();

if (isset($_POST['submit'])) {
	// var_dump($_POST);
	// exit;

	$username = "username";
	$password = "password";


	$result = $conn->query("SELECT FROM t_user (username, password) 
		VALUES ('$username', '$password')");

	// if ($result) {
	// 	echo '<script>alert("Login Sukses!")</script>';
	// 	header("Location: home.php");
	// } else {
	// 	echo '<script>alert("Login gagal")</script>';
	// }
}

CloseCon($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Nama Perusahaan</title>
	<link rel="stylesheet" type="text/css" href="Assets\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Assets\css\style.css">
	<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="Assets/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<form class="formregis" style="background-color: #EEEEEE; border-radius: 10px; margin-top: 10%;" method="post">
				<div class="form-group">
					<label>Username:</label>
					<input type="username" class="form-control" id="username" name="username" required>
				</div>
				<div class="form-group" >
					<label>Password:</label>
					<input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
				</div>

				<button type="submit" class="btn btn-primary" name="submit">Login</button><br><br>
				
				Don't have an account? <a href="index.php">Sign Up Here</a> 
			</form>
		</div>
		<div class="col-md-4">

		</div>
	</div>


</body>
</html>