<?php 
include 'Controller/menu_Account.php';
require_once 'layout/header.php'; 
?>
			<style type="text/css">
				.menudashboard #homee
				{	
					width: 100vh;
					/*background-color: #4183D7;
					margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					border-top: 0.001em solid white;
					border-bottom: 0.001em solid white;
				}
				.menudashboard #account
				{	
					width: 100vh;
					background-color: #32404D;
					/*margin: 0 10px;*/
					border: none;
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					border-left: 0.5em solid #2C608E;
				}
				.menudashboard #test
				{	
					width: 100vh;
					/*background-color: #7f8c8d;
					margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					border-top: 0.001em solid white;
					border-bottom: 0.001em solid white;
				}
				.menudashboard #logout
				{	
					width: 100vh;
					background-color: #e74c3c;
					/*margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					margin-top: 380px;
				}
				.menudashboard a:hover
				{
						/*font-weight: bold;
						/*border: 0.3px solid #E4F1FE;*/
				}
				#homee:hover{
					background-color: rgba(255, 255, 255, 0.2);
					text-decoration: none;
					border-left: 0.5em solid #2C608E;
				}
				#account:hover{
					background-color: rgba(255, 255, 255, 0.2);
					text-decoration: none;
					border-left: 0.5em solid #2C608E;
				}
				#test:hover{
					background-color: rgba(255, 255, 255, 0.2);
					text-decoration: none;
					border-left: 0.5em solid #2C608E;
				}
				#logout:hover{
					background-color: #b62616;
					text-decoration: none;
				}
				tr td{
					border:1px solid black;
					padding: 5px 0 5px 10px;
				}
				h1{
					font-size: 32px;
				}
				i{
					float: right;
					margin-right: 450px;
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
						<a id="homee" href="home.php">Home <i class="fa fa-home fa-lg"></i></a><br>
						<a id="account" href="menu_Account.php">Account <i class="fa fa-user-circle-o fa-lg"></i></a><br>
						<a id="test" href="menu_test.php">Test <i class="fa fa-book -fa-lg"></i></a>
						<a id="logout" href="Controller/logout.php">Logout <i class="fa fa-sign-out fa-lg"></i></a>
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
									<table style="width:90%">
										<tr>
										    <td>ID </td>
										    <td><p>  <?php echo $fetch['userID']; ?></p></td>
										</tr>
										<tr>
											<td>No.KTP </td>
											<td><p>  <?php echo $fetch['noktp']; ?></p></td>
										</tr>
										<tr>
											<td>Fullname </td>
											<td><p>  <?php echo $fetch['fullname']; ?></p></td>
										</tr>
										<tr>
											<td>Username </td>
											<td><p>  <?php echo $fetch['username']; ?></p></td>
										</tr>
										<tr>
											<td>E-mail </td>
											<td><p>  <?php echo $fetch['email']; ?></p></td>
										</tr>
										<tr>
											<td>Gender </td>
											<td><p>  <?php echo $fetch['gender']; ?></p></td>
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
