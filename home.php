<?php 

include 'db_connection.php';
$conn = OpenCon();

$result = $conn->query('SELECT * FROM t_user');
// echo "<pre>";
// print_r($result->fetch_array());
echo "<table border='1'>";
while ($data = $result->fetch_array()) {
	echo "<td>".$data[0]."</td>";
	echo "<td>".$data[1]."</td>";
	echo "<td>".$data[2]."</td>";
	echo "<td>".$data[3]."</td>";
	echo "<td>".$data[4]."</td>";
	echo "<td>".$data[5]."</td>";
}
echo "</table>";
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Home</title>
			<link rel="stylesheet" type="text/css" href="Assets\css\font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="Assets\css\style.css">
			<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
			<script src="Assets/js/jquery-3.2.1.min.js"></script>
			<style type="text/css">
				
			</style>
		</head>
		<body style="background-color: white;">
			<div class="row">
				<!-- ini yang menampilkan menu menu yang ada -->
				<div class="col-md-2" style="background-color: #2c3e50; height: 100vh;">
				<h1 style="color: #e74c3c; text-align: center;">Dashboard</h1> <br>
				
				<lo>
					<div class="sidemenu">
						<li>
							<a href="#">Home</a>
						</li>	
						<li>
							<a href="menu_Account.php">Account</a>
						</li>
						<li>
							<a href="menu_test.php">Test</a>
						</li>	
					</div>
				</lo>
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1; height: 100vh;">
					luw liat berita di sinih!!!
				</div>
			</div>
		</body>
	</html>
