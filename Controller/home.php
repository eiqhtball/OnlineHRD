<?php 
include 'Controller/configdb.php'; 
require_once 'core/sessionuser.php';
$html=file_get_contents('../hrd/home.php');
$ceksession = $_SESSION['username'];

$result = $conn->query("SELECT result FROM t_user WHERE username = '$ceksession'");
$fetch = $result->fetch_assoc();
$r = $fetch['result'];
// var_dump($r);
// exit;
