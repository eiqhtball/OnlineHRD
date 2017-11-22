<?php 
include 'configdb.php';
session_start();
$html=file_get_contents('../hrd/home.php');
$ceksession = $_SESSION['username'];

if (!isset($ceksession)) {
	header('location: login.php');
}
$soal = "SELECT * FROM t_soal";
$q = $conn->query($soal);

