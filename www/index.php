<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>Test Environment</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" >
	</head>

	<body>

		<div class="header">
  			<h1>THIS IS SERVER 1</h1>
		</div>

		<div class="topnav">
  			<a href=info.php>PHP info</a>
  			<a href="#" onclick="javascript:window.location.port=8080">Node app</a>

		</div>

		<div class="row">
  			<div class="column side">
    				<h2>Test Environment</h2>
  				<p>
				Designed by: <br>
				Mark Cardiff<br>
				</p>
			</div>

			<div class="column middle">

				<h1>Hello World!</h1>
				<h4>Attempting MySQL connection from php...</h4>
				<?php
				$host = 'db-service';
				$user = 'root';
				$pass = 'rootpassword';
				$conn = new mysqli($host, $user, $pass);
					if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					} 
				echo "Connected to MySQL successfully!";
				?>
			</div>
  			<div class="column side">
    				<h2>Sidebar</h2>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. 
				Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. 
				Praesent scelerisque tortor sed accumsan convallis.</p>
  			</div>
		</div>

	</body>
</html>
