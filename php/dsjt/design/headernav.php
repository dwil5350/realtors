<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="index.php" class="logo"><i class="fas fa-house"></i>Realtors</a>

         <ul>
            <li><a class="round_box" href="https://binarypiano.com/">Welcome!<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="index.php">Homepage<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">Ads</a></li>
                     <li><a href="#">Sponsored Homes</a></li>
                     <li><a href="#">Zipcode</a></li>
                     <li><a href="#">Distance</a></li>
                  </ul>
               </li>
               <li><a href="#">Browse Homes<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">Homes for sale</a></li>
                     <li><a href="#">New Listing</a></li>
                     <li><a href="#">Open Houses</a></li>
                  </ul>
               </li>
               <li><a href="#">Realtors</a>
                  <ul>
                     <li><a href="contact.php">Find a Realtor</a></li>
                     <li><a href="#">Realtor Reviews</a></li>
                  </ul>
               </li>
               <li><a href="#">Loans<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">Mortgage rates</a></li>
                     <li><a href="#">Refinance rates</a></li>
                     <li><a href="mortgage.php">Mortgage calculator</a></li>
                     <li><a href="#">Lenders</a></li>
                     <li><a href="#">Payment Assistance</a></li>
                  </ul>
               </li>
               <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About Us</a></i></li>
                     <li><a href="contact.php">Contact Us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
               <li><a href="#">Statistics<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">Housing Stats</a></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="#">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <?php if ($is_logged_in == TRUE){
                     ?><li><a href="login.php">login</a></li><?php
                  } else {
                     ?><li><a href="logout.php">log out</a></li><?php
                  }?>
                  <li><a href="register.php">register</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>