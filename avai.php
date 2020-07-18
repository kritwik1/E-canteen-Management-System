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
    <a class="nav-link " href="adminhomepage.php" >welcome ADMIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="adpro.php" target="_parent">Orders</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="newp.html">Add New Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="avai.php"> Products IN Canteen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="logout.php" >logout</a>
  </li>
</ul>
<table class="table" border="1">
  <tr>
    <td>PID</td>
    <td>Product Name</td>
    <td>Product Type</td>
    <td>Product Price</td>
    <td>Availability</td>
  </tr>
  <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
//$aaa=   $_SESSION["u2"];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>";
     echo $row['id'];
     echo "</td><td>";
     echo $row['pname'];
     echo "</td><td>";
     echo $row['ptype'];
     echo "</td><td>";
     echo "₹".$row['price'];
      echo "</td><td>";
       echo $row['avail'];


     echo "</td></tr>";
   }
}
 ?>
</table>
<form method="post">
  <label for="pid">Enter the ID of product whose Price Is To Be Changed:</label>
  <input type="text" name="ID" id="ID">
  <input type="text" name="newp" placeholder="Enter new Price">
  <input type="submit" name="sunl" value="Submit">
</form>
<?php
  if(isset($_POST['sunl'])){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "canteen";
      $ti=$_POST['ID'];
        $pi=$_POST['newp'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "update products set price='$pi' where id='$ti'";
    if($result = $conn->query($sql)){
      echo"<b> NOTE:</b>Refresh the page to see update";
    }
    else {
      echo"ID iS not valid";
    }

  }

 ?>
 <form method="post">
   <label for="pid">Enter the ID of product whose Availability has to be changed to NOT AVAILABLE :</label>
   <input type="text" name="ID" id="ID">

   <input type="submit" name="sunll" value="Submit">
 </form>
 <?php
   if(isset($_POST['sunll'])){
     $servername = "localhost";
     $username = "root";
     $password = "root";
     $dbname = "canteen";
       $ti=$_POST['ID'];
         //$pi=$_POST['newp'];
     $conn = new mysqli($servername, $username, $password, $dbname);
     $sql = "update products set avail='NOT AVAILABLE' where id='$ti'";
     if($result = $conn->query($sql)){
       echo"<b> NOTE:</b>Refresh the page to see update";
     }
     else {
       echo"ID iS not valid";
     }

   }

  ?>
  <form method="post">
    <label for="pid">Enter the ID of product whose Availability has to be changed to  Available :</label>
    <input type="text" name="ID" id="ID">

    <input type="submit" name="sunlll" value="Submit">
  </form>
  <?php
    if(isset($_POST['sunlll'])){
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "canteen";
        $ti=$_POST['ID'];
          //$pi=$_POST['newp'];
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "update products set avail='Available' where id='$ti'";
      if($result = $conn->query($sql)){
        echo"<b> NOTE:</b>Refresh the page to see update";
      }
      else {
        echo"ID iS not valid";
      }

    }

   ?>

  </body>
</html>
