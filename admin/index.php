<?php require_once '../layout/headeradmin.php'; ?>
</head>
<body style="background-image: url('../assets/img/bg-2.jpg');">
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4" style="margin-top: 8%;">
			
			<form class="formregis" style="background-color: #EEEEEE; border-radius: 10px; margin-top: 10%;" method="POST" action="../Controller/loginadmin.php">
				<h2 class="login-header">
				Login Admin
				</h2>
				<div class="form-group">
					<label>Username:</label>
					<input type="username" placeholder="Username" class="form-control" id="username" name="username" required>
				</div>
				<div class="form-group" >
					<label>Password:</label>
					<input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
				</div>

				<button type="submit" class="btn btn-primary" name="submit">Login</button><br><br>
				
				Don't have an account? <a href="index.php">Sign Up Here</a> 
			</form>
		</div>
		<div class="col-md-4">

		</div>
	</div>
</body>
</html>