<?php 
include 'configdb.php';

session_start();

if (isset($_POST['submit'])) {
$no = (string)$nomor = $_POST['nomor'];
$soal = $_POST['soal'];
$jawaban = $_POST['jawaban'];

$edit = mysqli_query($conn, "UPDATE t_user SET soal = '$soal', system_answer = '$jawaban' WHERE no = $no");
var_dump($edit);
exit;


if ($edit) {
		echo '<script>alert("Edit sukses!")</script>';
		header("Location: ../admin/edit_soal.php");
	} else {
		echo '<script>alert("Edit gagal!")</script>';
	}
}
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Edit Account</title>
	<link rel="stylesheet" type="text/css" href="..\Assets\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="..\Assets\css\style.css">
	<link href="..\Assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="..\Assets/js/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		.form-group p
		{
			font-size: 18px;
			text-transform: uppercase;
		}
		.tempat
		{
			padding: 30px 300px 0 300px; 
		}
		hr
		{
			border: 1px solid grey;
			width: 220px;
		}
	</style>
</head>
<body>
	<div class="tempat">
		<form class="formregis" style="background-color: #EEEEEE; border-radius: 10px;" method="post">
			<h2>Edit Account</h2>
			<hr align="left">
			<div class="form-group" style="margin-bottom: 0px;">
				<label>No.KTP:</label>
				<p> </p>
			</div>
			<div class="form-group" style="margin-bottom: 0px;">
				<label>Username:</label>
				<p> </p>
			</div>
			<div class="form-group" style="margin-bottom: 0px;">
				<label>Nama Lengkap:</label>
				<input type="name" class="form-control" id="name" name="fullname" required>
			</div>
			<div class="form-group" style="margin-bottom: 0px;">
				<label>E-mail:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group" name="gender" style="margin-bottom: 0px;" >
				<label>Gender</label><br>
			  	<input type="radio" name="gender" value="Male"><label>Male</label></input>
			  	<input type="radio" name="gender" value="Female"><label>Female</label><br></input>
			</div>
			<div class="form-group" >
				<label>Password:</label>
				<input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Save</button><br><br>
		</form>
	</div>
</body>
</html> -->