<?php
include 'Controller/configdb.php'; 
include 'Controller/test.php';
require_once 'layout/header.php';
require_once 'core/sessionuser.php';
// var_dump($r);exit;

 ?>

			<style type="text/css">
				.menudashboard #homee
				{	
					width: 100vh;
					/*background-color: #4183D7;
					/*margin: 0 10px;*/
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
					/*background-color: #95a5a6;
					/*margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					border-bottom: 0.001em solid white;
				}
				.menudashboard #test
				{	
					width: 100vh;
					background-color: #32404D;
					/*margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					border-left: 0.5em solid #2C608E;
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
				.contentTest{
					height: 80vh;
					overflow-y: scroll;
					padding-top: 15px;
				}
				.txtArea{
					width: 500px;
					height: 60px;
				}
				h1{
					font-size: 32px;
				}
				.isimenu_head{
					background-color:  #e6e6e6;
					padding: 5px 15px;
					margin-left: -15px;
					border-radius: 0 0 10px 10px;
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
						<a id="homee" href="home.php" class="link">Home <i class="fa fa-home fa-lg"></i></a><br>
						<a id="account" href="menu_Account.php" class="link">Account <i class="fa fa-user-circle-o fa-lg"></i></a><br>
						<a id="test" href="menu_test.php" class="link">Test <i class="fa fa-book fa-lg"></i></a>
						<a id="logout" href="Controller/logout.php" class="link">Logout <i class="fa fa-sign-out fa-lg"></i></a>
					</div>
					
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #f2f2f2; height: 100vh;">
					<div class="isimenu">
						<!-- Head isi -->
						<div class="isimenu_head">
							<h3>
								<?php echo "User yang Login Sekarang : $ceksession";?>
							</h3>						
						</div>
						<!-- Body isi -->
						<div class="isimenu_body contentTest">
							<form method="post" action="Controller/proses_test.php">
								<div class="main">

									<?php
										if ($r ==! 0)
										{
											if ($r >= 5) 
											{
												echo "Anda sudah mengerjakan test dengan status : LULUS";
											}
											else
											{
												echo "Anda sudah mengerjakan test dengan status : TIDAK LULUS";
											}
										}
										else
										{
											if($q->num_rows) 
											{
												while ($row = $q->fetch_assoc()) 
												{
													echo "<div  class=question>
																<p>".$row["no"].". ".$row["soal"]."</p>
																<textarea name=answer[] placeholder=Isi sesuai dengan kata hati anda..... class=txtArea></textarea>
														  </div>";
												}
											}
											echo "<input type=submit name=submit value=OK>";
											
										}			
									?>
										<!-- <input type=submit name=submit value=OK> -->
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>
