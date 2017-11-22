<?php 
include 'configdb.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn, "select * from t_user where username='$username'");
$cek = mysqli_num_rows($login);

$fetch = mysqli_fetch_assoc($login);

if($cek > 0 && password_verify( $password, $fetch['password'])){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location: ../home.php");
}else{
	header("location: ../login.php");
	echo '<script>alert("Login gagal!")</script>';
}

?>