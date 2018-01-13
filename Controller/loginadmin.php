<?php 
include 'configdb.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
// $login = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
// $cek = mysqli_num_rows($login);
$login = $conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = $login->num_rows;

//$fetch = mysqli_fetch_array($login);
$fetch = $login->fetch_array();
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location: ../admin/home.php");
}else{
	header("location: ../index.php");
}

?>