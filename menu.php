<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
		}
		.menuContent{
			height: 100vh;
			background-color: red;
			width: 20%;
			display: line;
		}

		a{
			text-decoration: none;
			padding: 5px;
			background-color: blue;
			width: 500px;
			border:1px solid black;
		}

	</style>
</head>
<body>
			<div class="menuContent">
				<p>Dashboard</p>
				<a href="home.php">Home <i class="fa fa-home fa-lg"></i></a><br>
				<a href="menu_Account.php">Account <i class="fa fa-user-circle-o fa-lg"></i></a><br>
				<a href="menu_test.php">Test <i class="fa fa-book fa-lg"></i></a>
				<a href="Controller/logout.php">Logout <i class="fa fa-sign-out fa-lg"></i></a>
			</div>
</body>
</html>