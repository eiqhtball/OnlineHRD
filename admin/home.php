<?php 
include '../Controller/homeadmin.php';
require_once '../layout/headeradmin.php';
include '../Controller/configdb.php';
// $data = "SELECT fullname, result FROM t_user";
// $d = $conn->query($data);
$d = $conn->query("SELECT fullname, result FROM t_user");

 ?>
			<style type="text/css">
				.menudashboard #home
				{	
					width: 100vh;
					background-color: #4183D7;
					/*border: 5px solid #E4F1FE;
					margin: 0 10px;
					padding: 10px 0 0 10px;*/
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #manage_soal
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
				#manage_soal:hover{
					padding-left: 20px;
				}
				.menudashboard #logout
				{	
					/*width: 100vh;
					background-color: #6C7A89;
					margin: 0 10px;
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;*/
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
				#logout:hover{
					background-color: #EF6E5B;
				}
				a:hover{
					text-decoration: none;
				}
				.menudashboard a:hover
				{
						font-weight: bold;

				}
				table, tr, td{
					border: 0.5px solid black;
					padding: 10px;
					width: 800px;
				}
				.bgTr{
					background-color: #14BAD4;
				}
				.head{
					height: 90vh;
					overflow-y: scroll;
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
						<a id="manage_soal" href="manage_soal.php">Manage Soal</a>
						<a id="logout" href="../Controller/logoutadmin.php">Logout</a>
					</div>
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1; height: 100vh;">
					<div class="isimenu">
						<!-- Head isi -->
						<div class="isimenu_head head">
							<h2>Table Score User</h2>
							<table>
								<tr class="bgTr">
									<td> Full Name</td>
									<td> Score</td>
								</tr>
							<?php			
								if ($d->num_rows) 
									{
										while ($row = $d->fetch_assoc()) 
											{
												echo "
														<tr>
															<td>".$row["fullname"]."</td>
															<td>".$row["result"]."</p></td>
														</tr>
												";
											}
									}			
							?>
						</table>
						</div>
						<!-- Body isi -->
						<div class="isimenu_body">  
							
						</div>
					</div>
				</div>	
			</div>
		</body>
	</html>
          