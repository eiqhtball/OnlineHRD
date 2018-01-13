<?php 
include 'configdb.php';
require_once '../core/sessionuser.php';

$ceksession = $_SESSION['username'];
// $tampil = mysqli_query($conn, "select * from t_user where username='$ceksession'");
// $fetch = mysqli_fetch_assoc($tampil);
// $tampil = $conn->query("SELECT * FROM t_user WHERE username='$ceksession'");
// $fetch = $tampil->fetch_assoc();
$fetch = $conn->query("SELECT * FROM t_user WHERE username='$ceksession'")->fetch_assoc();
$useredit = (string)$fetch['username'];

if (isset($_POST['submit'])) {
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// $edit = mysqli_query($conn, "UPDATE t_user SET fullname = '$fullname', email = '$email', gender = '$gender', password = '$password' WHERE username = '$useredit'");
$edit = $conn->query("UPDATE t_user SET fullname = '$fullname', email = '$email', gender = '$gender', password = '$password' WHERE username = '$useredit'");

if ($edit) {
		echo '<script>alert("Edit sukses!")</script>';
		header("Location: ../menu_account.php");
	} else {
		echo '<script>alert("Edit gagal!")</script>';
	}
}
?>

<!DOCTYPE html>
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
				<p><?php echo $fetch['noktp'];?> </p>
			</div>
			<div class="form-group" style="margin-bottom: 0px;">
				<label>Username:</label>
				<p><?php echo $fetch['username'];?> </p>
			</div>
			<div class="form-group" style="margin-bottom: 0px;">
				<label>Nama Lengkap:</label>
				<input type="name" class="form-control" id="name" name="fullname" required value="<?php echo $fetch['fullname']?>">
			</div>
			<div class="form-group" style="margin-bottom: 0px;">
				<label>E-mail:</label>
				<input type="email" class="form-control" id="email" name="email" required value="<?php echo $fetch['email']?>">
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
</html>