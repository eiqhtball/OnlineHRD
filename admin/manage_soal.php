<?php 
include '../Controller/manage_soal.php';

 ?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Home</title>
			<link rel="stylesheet" type="text/css" href="../Assets\css\font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="../Assets\css\style.css">
			<link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
			<script src="../Assets/js/jquery-3.2.1.min.js"></script>
			<style type="text/css">
				.menudashboard #home
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
				.menudashboard #manage_soal
								{	
					width: 100vh;
					background-color: #4183D7;
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
						<a id="manage_soal" href="manage_soal.php">Manage Soal</a>
						<a id="logout" href="Controller/logout.php">Logout</a>
					</div>
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1; height: 100vh;">
					<div class="isimenu">
						<!-- Head isi -->
						<div class="isimenu_head">
									
						</div>
						<!-- Body isi -->
						<div class="isimenu_body">
							<h3 class="login-header">
								Admin
							</h3>
							<form method="post" action="../Controller/manage_soal.php" class="formsoal" style="margin-top: 35%; width: 99%">
								<h4>Upload Soal</h4>  
								<div class="form-group">
									<label>Soal : </label>
									<input type="soal" placeholder="Soal" class="form-control" id="soal" name="soal" required>
								</div>
								<div class="form-group" >
									<label>Jawaban : </label>
									<input type="jawaban" placeholder="Jawaban" class="form-control" id="jawaban" name="jawaban" required>
								</div>
								<div class="form-group">
									<button name="submit">Submit</button>
								</div>

								<div class="Q&A">
									<div class="Q">
										<?php					
											if ($q->num_rows) 
											{
												while ($row = $q->fetch_assoc()) 
												{
													echo "<div class=question>
																<p>".$row["no"].". ".$row["soal"]."</p>
														  </div>";
												}
											}
										?>	
									</div>
									<div class="A">
										<?php
											if ($ans->num_rows) 
											{
												while ($row = $ans->fetch_assoc()) 
												{
													echo "<div class=question>
																<p>"/*.$row["no"].". "*/.$row["system_answer"]."</p>
														  </div>";
												}
											}			
										?>
									</div>
										
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</body>
	</html>
          