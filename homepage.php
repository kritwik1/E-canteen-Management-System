<?php
session_start();
if( isset( $_SESSION['u2'] ) ){
}
else{
  header("location:loginuser.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
  </head>
  <body>




</div>
    <ul class="nav nav-pills nav-fill">

  <li class="nav-item">
      <div class="shadow p-3 mb-5 bg-white rounded">

    <a class="nav-link " href="homepage.php" >welcome User</a>
  </li>
</div>
</div>

  <li class="nav-item">
      <div class="shadow p-3 mb-5 bg-white rounded">
    <a class="nav-link " href="products.php">Products</a>
  </li>
</div>

  <li class="nav-item">
    <div class="shadow p-3 mb-5 bg-white rounded">
    <a class="nav-link" href="detail.php">Your Details</a>
  </li>
</div>

  <li class="nav-item">
      <div class="shadow p-3 mb-5 bg-white rounded">
    <a class="nav-link" href="myorder.php">Your Orders</a>
  </li>
</div>

  <li class="nav-item">
    <div class="shadow p-3 mb-5 bg-white rounded">
    <a class="nav-link " href="logout.php" >logout</a>
  </li>
</div>


<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">

  <img class="w3-image" src="images/hamb.jfif" alt="Hamburger Catering" width="1500" height="700">

  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Online Canteen</h1>
  </div>
</header>

  </body>
</html>
