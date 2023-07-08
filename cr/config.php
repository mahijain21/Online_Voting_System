<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'boidushy_root');
	define('DB_PASSWORD', 'boidushya2002');
	define('DB_NAME', 'cr');
	$conn= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("Could not connect to mysql".mysqli_error($conn));
?>