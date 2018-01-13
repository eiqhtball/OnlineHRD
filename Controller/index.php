<?php
include 'configdb.php';

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
		session_start();
		$_SESSION['username'] = $username;
		echo '<script>alert("pendaftaran sukses!")</script>';
		header("Location: ../login.php");
	} else {
		echo '<script>alert("pendaftaran gagal!")</script>';
	}
}

?>