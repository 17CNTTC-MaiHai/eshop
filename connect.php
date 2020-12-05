<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "eshopper";
	
	// Create connection
	// Example (MySQLi Object-Oriented)
	$con = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} else {
		// echo "thành công";
	}
	
?>
