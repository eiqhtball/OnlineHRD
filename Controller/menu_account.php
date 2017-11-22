<?php 
include 'configdb.php';
session_start();
$html=file_get_contents('../hrd/home.php');
$ceksession = $_SESSION['username'];
$tampil = mysqli_query($conn, "select * from t_user where username='$ceksession'");
$fetch = mysqli_fetch_assoc($tampil);

if (!isset($ceksession)) {
	header('location: login.php');
}