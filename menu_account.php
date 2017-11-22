<?php 
include 'Controller/menu_Account.php';
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Home</title>
			<link rel="stylesheet" type="text/css" href="Assets/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="Assets/css/style.css">
			<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
			<script src="Assets/js/jquery-3.2.1.min.js"></script>
			<style type="text/css">
				.menudashboard #home
				{	
					width: 100vh;
					background-color: #4183D7;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #account
				{	
					width: 100vh;
					background-color: #95a5a6;
					/*margin: 0 10px;*/
					border: 5px solid #E4F1FE;
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #test
				{	
					width: 100vh;
					background-color: #7f8c8d;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #logout
				{	
					width: 100vh;
					background-color: #6C7A89;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard a:hover
				{
						font-weight: bold;
						border: 1px solid #E4F1FE;
				}
			</style>
		</head>
		<body style="background-color: white;">
			<div class="row">
				<!-- ini yang menampilkan menu menu yang ada -->
				<div class="col-md-2" style="background-color: #2c3e50; height: 100vh;">

					<!-- Header Dashboard Menu -->
					<h1 style="color: #e74c3c; margin-left: 10px;">Dashboard</h1> <br>

					<!-- Menu Utama -->
					<div class="menudashboard">
						<a id="home" href="home.php">Home</a><br>
						<a id="account" href="menu_Account.php">Account</a><br>
						<a id="test" href="menu_test.php">Test</a>
						<a id="logout" href="Controller/logout.php">Logout</a>
					</div>
					<div class="logout">
					</div>
					
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1; height: 100vh;">
					<div class="account">
						<div class="isimenu">
							<!-- Head isi -->
							<div class="head">
							</div>
							<!-- Body isi -->
							<div class="body_account">
								<div class="tampil">
									<h3>Detail Account</h3>
									<table style="width:100%">
										<tr>
										    <td>ID :</td>
										    <td><p> : <?php echo $fetch['userID']; ?></p></td>
										</tr>
										<tr>
											<td>No.KTP :</td>
											<td><p> : <?php echo $fetch['noktp']; ?></p></td>
										</tr>
										<tr>
											<td>Fullname :</td>
											<td><p> : <?php echo $fetch['fullname']; ?></p></td>
										</tr>
										<tr>
											<td>Username :</td>
											<td><p> : <?php echo $fetch['username']; ?></p></td>
										</tr>
										<tr>
											<td>E-mail :</td>
											<td><p> : <?php echo $fetch['email']; ?></p></td>
										</tr>
										<tr>
											<td>Gender :</td>
											<td><p> : <?php echo $fetch['gender']; ?></p></td>
										</tr>
									</table>
								</div>
								<div class="edit">
									<a href="controller/account_edit.php"><button type="button" class="btn btn-primary">Edit Profile</button></a>
								</div>	
							</div>
						</div>
					</div>							
				</div>
			</div>
		</body>
	</html>
