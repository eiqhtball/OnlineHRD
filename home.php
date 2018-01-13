<?php 
include 'Controller/home.php';
require_once 'layout/header.php';
?>
			<style type="text/css">
				.menudashboard #home
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
				}
				.menudashboard #account
				{	
					width: 100vh;
					/*margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
					border-top: 0.001em solid white;
					border-bottom: 0.001em solid white;
				}
				.menudashboard #test
				{	
					width: 100vh;
					/*margin: 0 10px;*/
					padding: 10px 0 10px 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
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
				.menudashboard a:hover;
				{
						font-weight: bold;
						/*border: 0.3px solid #E4F1FE;*/
				}
				#home:hover{
					text-decoration: none;
					background-color: rgba(255, 255, 255, 0.2);
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
				h1{
					font-size: 32px;
				}
				i{
					float: right;
					margin-right: 450px;
				}
				.welcomeContent{
					width: 734px;
					height: auto;
					padding: 10px;
					background-color: #ffffff;
					text-align: justify;
				}

				.welcomePotition{
					float: left;
					/*margin: 0 20px 0 0;*/
				}
				.aboutContent{
					width: 361px;
					height: auto;
					padding: 5px;
					background-color: #ffffff;
				}
				.aboutPotition{
					float: left;
					margin: 0 0 0 10px;
				}
				.contentDisplay{
					overflow: auto;
					width: 100%;
				}
				.isimenu_head{
					padding: 20px;
				}
				.overflow{
					overflow: auto;
				}
				.float{
					float: left;
				}
				.width{
					width: 373px;
					margin-bottom: 20px;
				}
				.fz{
					font-size: 20px;
					text-align: center;
					padding: 30px;
				}
				.bgBar{
					background-color: #ffffff;
					padding: 10px;
					width: 360px;
				}
				.logo{
					margin: auto;
					align-content: center;
					text-align: center;
					width: 150px;
					height: 110px;
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
						<a id="home" href="home.php">Home <i class="fa fa-home fa-lg"></i></a><br>
						<a id="account" href="menu_Account.php">Account <i class="fa fa-user-circle-o fa-lg"></i></a><br>
						<a id="test" href="menu_test.php">Test <i class="fa fa-book fa-lg"></i></a>
						<a id="logout" href="Controller/logout.php">Logout <i class="fa fa-sign-out fa-lg"></i></a>
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
							<!-- #1 -->
							<div>
								<div class="overflow">
									<!-- ##1.1 -->
									<div class="float width">
										<div class="bgBar">
											<p>User Signed In</p>
											<p style="font-size: 10px; margin-top: -10px;">Users Currently Signed In</p>
											<p class="fz"><?php echo $ceksession;?></p>
										</div>
									</div>
									<!-- #1.2 -->
									<div class="float width">
										<div class="bgBar">
											<p>Current Status</p>
											<p style="font-size: 10px; margin-top: -10px;">Your Current Setatus Is</p>
											<p class="fz">
												<?php
													if ($r ==! 0) 
													{
														if ($r >= 5) 
														{
															echo "LULUS";
														}
														else
														{
															echo "TIDAK LULUS";
														}
													}
													else
													{
														echo "Belum mengerjakan test";
													}			
												?>
											</p>
										</div>
									</div>
									<!--  #1.3 -->
									<div class="float width">
										<div class="bgBar" style=" ">
											<p>Logo</p>
											<img src="Assets\img\generali_logo.png" class="logo">
										</div>
									</div>
								</div>
							</div>

							<!-- #2 -->
							<div class="contentDisplay">
								<!-- .........  2.1  ................. -->
								<div class="welcomePotition">
									<div class="welcomeContent">
										<p style="padding: 0px 0 0 10px;">Welcome</p>
										<p style="font-size: 10px; margin-top: -10px; padding: 0 10px"></p>
										<p style="padding:0 0 0 10px;">
											
										</p>
										<br>
										<p style="padding: 0 0 0 10px; margin-top: -10px;">
											PT Asuransi Jiwa Generali Indonesia, bagian dari Generali Group yaitu salah satu perusahaan asuransi terkemuka di pasar finasial global, beroperasi secara resmi sejak tahun 2009, Generali menunjukan pertumbuhanny yang sehat dan cepat. Dengan prosentase solvabilitas diatas 200 persen, Generali mencatat perolehan premi Rp. 1,3 trilliun pada tahun 2013, naik 102 persen dari tahun 2012.
											Generali mempunyai inspirasi unutk menjadi perusahaan asuransi jiwa yang bertanggung jawab di Indonesia, dimana kami menyediakan klien dengan layanan berkualitas dan  produk inovatif serta keuntungan-keuntungan jangka panjang yang menarik untuk para stakeholder. Generali menawarkan layanan asuransi jiwa total, perlindungan kesehatan dan keperluan investasi lainnya untuk kelompok klien dan nasabah individu melalui distribusi multi-channel. Dengan visi, misi dan nilai yang baru, Generali semakin aktif untuk melindungi dan meningkatkan kehidupan masyarakat melalui produk dan layanan finansial yang inovatif. PT. Asuransi Jiwa Generali Indonesia merupakan perusahaan asuransi yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan. Untuk informasi lebih lanjut, silahkan kunjungi <a href="www.generali.co.id">www.generali.co.id</a>
										</p>
									</div>
								</div>

								<!-- ....................   2.2  ......................... -->
								<div class="aboutPotition">
									<div class="aboutContent">
										<p style=" padding: 5px 0 0 10px;">About</p>
										<p style="font-size: 10px; margin-top: -10px; padding: 0 10px;">vision and mission </p>
										<p style="padding: 0 10px">
											Visi kami adalah bertujuan untuk selalu "actively protect and enhance people's lives"
											<br>
											Misi kami adalah untuk menjadi "the first choice by delivering relevant and accessible insurance solutions"
										</p>
									</div>
								</div>
							</div>
							<!-- Map -->
							<!-- <div style="width: 161vh; height: 40vh; margin-top: 20px;"> -->
								<?php // include ('map.html');?>
							<!-- </div> -->
							<!-- ...........................END.......................... -->
						</div>
					</div>
				</div>	
			</div>
		</body>
	</html>
          