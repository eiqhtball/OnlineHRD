<?php 
	session_start();
	$ceksession = $_SESSION['username'];
	if (!isset($ceksession)) {
	header('location: index.php');
}
 ?>