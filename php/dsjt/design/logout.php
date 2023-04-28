<?php
	session_start();
	if (empty($_SESSION['user'])){
		header('Location: login.php');
		die();
	}
	
	session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Goodbye!</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="redir.js"></script>
</head>
<body>
	<h1><center>Goodbye!</center></h1>
	<form>
		<center><input type="button" onclick = "homeredir()" value = "Return to Homepage"></center>
	</form>
</body>
</html>