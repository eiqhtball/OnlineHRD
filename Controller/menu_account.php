<?php 
include 'configdb.php';
require_once 'core/sessionuser.php';
$html=file_get_contents('../hrd/home.php');
$ceksession = $_SESSION['username'];
// $tampil = mysqli_query($conn, "select * from t_user where username='$ceksession'");
// $fetch = mysqli_fetch_assoc($tampil);
$tampil = $conn->query("SELECT * FROM t_user WHERE username='$ceksession'");
$fetch = $tampil->fetch_assoc();

if (!isset($ceksession)) {
	header('location: login.php');
}