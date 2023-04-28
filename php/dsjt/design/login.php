<?php include 'session.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<?php include "headernav.php";?>

<!-- header section ends -->

<!-- login section starts  -->

<section class="form-container">

   <form action="auth.php" onsubmit = "return validation()" method = "POST">
      <p id = "response"></p>
      <h3>welcome back!</h3>
      <input type="email" id="userID" name="userID" required maxlength="50" placeholder="enter your email" class="box">
      <input type="password" id="password" name="password" required maxlength="20" placeholder="enter your password" class="box">
      <p>don't have an account? <a href="register.php">register now</a></p>
      <input type="submit" value="login now" name="submit" class="btn">
   </form>

</section>

<!-- login section ends -->












<!-- footer section starts  -->

<?php include "footernav.php";?>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>