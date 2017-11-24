<?php 
include 'Controller/test.php';
require_once 'layout/header.php';
 ?>

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
					border: 5px solid #E4F1FE;
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
					
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1; height: 100vh;">
					<div class="isimenu">
						<!-- Head isi -->
						<div class="isimenu_head">
							<h3><?php echo "User yang Login Sekarang : $ceksession";?></h3>						
						</div>
						<!-- Body isi -->
						<div class="isimenu_body">
							<form method="post" action="Controller/proses_test.php">
								<div class="main">

									<?php			
										if ($q->num_rows) 
										{
											while ($row = $q->fetch_assoc()) 
											{
												echo "<div  class=question>
															<p>".$row["no"].". ".$row["soal"]."</p>
															<textarea name=answer[] placeholder=Isi sesuai dengan kata hati anda.....></textarea>
													  </div>";
											}
										}			
									?>
										<input type="submit" name="submit" value="OK">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>
