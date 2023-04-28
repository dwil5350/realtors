<?php include 'session.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<?php include 'headernav.php';?>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home">

   <section class="center">

      <form action="search.html" method="post" class="round_box">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>Enter Location <span>*</span></p>
            <input type="text" name="location" required maxlength="50" placeholder="City, or ZIP Code" class="input">
         </div>
         <div class="flex" id="search_options" value=0>
         </div>
         <input type="submit" value="search" name="search" class="btn">
         <input type="button" class="btn" value="Advanced Search" id="adv_search" onclick="toggleSearch()">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>buy</h3>
         <p>Search our listings to find your ideal home.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>sell</h3>
         <p> List your house for sell.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 service</h3>
         <p>Our customer service representatives are always on call 24/7 to assist you.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">latest listings</h1>

   <div class="box-container">

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>Walter White</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>house</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-1.webp" alt="">
         </div>
         <h3 class="name">308 Negra Arroyo Lane</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Alberquerque, NM</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>Phillip J Fry</p>
               <span>3-1-3002</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-2.webp" alt="">
         </div>
         <h3 class="name">Robot Arms Apartment</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>New New York</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>Sheldon Cooper</p>
               <span>4-18-2023</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-3.jpg" alt="">
         </div>
         <h3 class="name">The Los Robles Apartment Building</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>2311 North Los Robles Avenue, Pasadena, California</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.html" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->










<!-- footer section starts  -->

<?php include 'footernav.php';?>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/index.js"></script>

</body>
</html>