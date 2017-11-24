<?php require_once 'layout/header.php'; ?>
		</head>
		<body style="background-image: url('assets/img/regis.jpg');">
			<!-- <div class="navbar">
				<div class="row"s>
					<div class="col-md-10">
						<a class="navbar-brand" href="#">Online HRD</a>
					</div>
					<div class="col-md-2">
						<ul class="nav nav-pills">
						  <li role="presentation"><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
			</div> -->

			<div class="container" style="margin-top: 20px;">
				<div class="row">
				  	<div class="col-md-8" style="margin-top: 20px;">
				  		
				  	</div>
					  
					<div class="col-md-4" style="padding: 0px;">
						<div class="banner" style="border-radius: 10px; background-color: #E1FAFC; ">
							<p class="bannerregis" style="border-radius: 10px;" >
							Sign Up Here! <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</p>
						</div>

						<form class="formregis" style="background-color: #EEEEEE; border-radius: 10px;" method="post" action="controller/index.php">
							<div class="form-group" style="margin-bottom: 0px;">
								<label>No.KTP:</label>
								<input type="text" class="form-control" id="noktp" name="ktp" required>
							</div>
							<div class="form-group" style="margin-bottom: 0px;">
								<label>Nama Lengkap:</label>
								<input type="name" class="form-control" id="name" name="fullname" required>
							</div>
							<div class="form-group" style="margin-bottom: 0px;">
								<label>Username:</label>
								<input type="username" class="form-control" id="username" name="username" required>
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
							<!-- <div class="form-group">
								<label>Re-Password:</label>
								<input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="re-password" required>
							</div> -->
							<button type="submit" class="btn btn-primary" name="submit">Sign up</button><br><br>
							
							Already have an account? <a href="login.php">Login here</a> 
						</form>
					</div>
				</div>
			</div>			
		</body>
	</html>