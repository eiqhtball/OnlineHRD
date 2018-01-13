<?php 
include 'configdb.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
//$login = mysqli_query($conn, "select * from t_user where username='$username'");
$login = $conn->query("SELECT * FROM t_user WHERE username='$username'");
//$cek = mysqli_num_rows($login);
$cek = $login->num_rows;

//$fetch = mysqli_fetch_assoc($login);
$fetch = $login->fetch_assoc();

if($cek > 0 && password_verify( $password, $fetch['password'])){
	session_start();
	$_SESSION['username'] = $username;
	header("location: ../home.php");
}else{
	header("location: ../login.php");
	echo '<script>alert("Login gagal!")</script>';
}

?>