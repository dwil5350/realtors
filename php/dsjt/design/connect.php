<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db_name = "realtor_login";

	$con = mysqli_connect($host, $user, $password, $db_name);
	if($con->connect_error){
		die("Failed to connect with MySQL Server!");
	}
?>