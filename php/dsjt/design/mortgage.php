<?php include 'session.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<?php include 'headernav.php';?>

<!-- header section ends -->

<!-- search filter section starts  -->

<section class="filters" style="padding-bottom: 0;">

   <form action="" method="post" class="round_box">
      <div id="close-filter"><i class="fas fa-times"></i></div>
      <h3>mortgage calculator</h3>
         
         <div class="flex">
            <div class="box">
               <p>Home Price</p>
               <input type="text" name="price" id="price" placeholder="500000" class="input">
            </div>
            <div class="box">
               <p>Down Payment</p>
               <input type="text" id="d_payment" name="d_payment" class="input" placeholder="200000">
            </div>
            <div class="box">
               <p>Loan Years</p>
               <select name="years" id="years" class="input" required>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
               </select>
            </div>
            <div class="box">
               <p>Interest Rate</p>
               <input type="text" class="input" id="i_rate" name="i_rate" placeholder="6.5">
            </div>
            <div class="box" id="monthly_payment">
            </div>
         </div>
         <input type="button" value="calculate!" name="mort_calc" class="btn" onclick="calculateMortgage()">
   </form>

</section>

<section class="filters" style="padding-bottom: 0;">

   <form action="" method="post" class="round_box">
      <p id="text-box"></p>
      <div id="close-filter"><i class="fas fa-times"></i></div>
      <h3>How to calculate Mortgage Payments</h3>
      <table style="text-align: center; padding-left: 45%;">
         <tr style="font-size: 2rem; font-weight: bold;">
            <td rowspan="2">M = P</td>
            <td>r(1+r)<sup>n</sup></td>
         </tr>
         <tr>
            <td style="font-size: 2rem; font-weight: bold; border-top: 1px solid black;">(1+r)<sup>n</sup>-1</td>
         </tr>
      </table>
      <p style="font-size: 1.5rem"><b>P</b> = <u class="def_principal" onmouseover="definePrincipal()" onmouseout="clearPrincipal()">Principal</u>. P = Home Price - Down Payment</p>
      <p style="font-size: 1.5rem"><b>r</b> = <u class="def_m_rate" onmouseover="defineRate()" onmouseout="clearRate()">Monthly Interest Rate</u>. r = Interest Rate / 12</p>
      <p style="font-size: 1.5rem"><b>n</b> = <u class="def_num_pay" onmouseover="definePay()" onmouseout="clearPay()">Total Payments</u>. n = Years * 12</p>
      <p style="font-size: 1.5rem"><b>M</b> = <u class="monthly_pay" onmouseover="defineMonthlyPay()" onmouseout="clearMonthlyRate()">Monthly Payment</u>.
   </form>

</section>

<!-- footer section starts  -->

<?php include 'footernav.php';?>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/mortgage.js"></script>

</body>
</html>