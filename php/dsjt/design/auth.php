<?php
	session_start();
    $is_logged_in = FALSE;
	if (empty($_SESSION['user']) == false){
		echo "Welcome, " , $_SESSION['user'] , "!";
		include 'headernav.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lorem Ipsum</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/redir.js"></script>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php
		include('connect.php');
		$username = $_POST['userID'];
		$password = $_POST['password'];

		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysqli_real_escape_string($con, $username);
		$password = mysqli_real_escape_string($con, $password);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		$sql = "SELECT userID, password FROM users_two WHERE userID = '$username' AND password = '$password'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if ($row == NULL){
			$count = 0;
		} else {
			$count = mysqli_num_rows($result);
		}

		if($count == 1){
			$_SESSION['user'] = $username;
			echo "<h1><center> Login Successful! </center></h1>";
            $is_logged_in = TRUE;
		} else {
			echo "<h1><center> Incorrect Username or Password! </center></h1>";
		}

		$con -> close();
	?>
	<form>
		<?php
			if (empty($_SESSION['user']) == false){
				?> <center><input type="button" onclick = "homeredir()" value = "Return to Homepage"></center> <?php
			} else {
				?> <center><input type="button" onclick = "loginredir()" value = "Return to Login"></center> <?php
			}
		?>
	</form>
</body>
</html>