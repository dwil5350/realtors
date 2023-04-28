<?php
	include('connect.php');

	$sql = "SELECT * FROM kitchenstorage";
	$result = mysqli_query($con, $sql);

	$con -> close();
?>