<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Home</title>
  </head>
  <body>
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link " href="homepage.php" >welcome User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="products.php" target="_parent">Products Available</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="detail.php">Your Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="myorder.php">Your Orders</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="logout.php" >logout</a>
  </li>
</ul>
</body>
</html>
