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
       <div class="shadow p-3 mb-5 bg-white rounded">
     <a class="nav-link " href="homepage.php" >welcome User</a>
   </li>
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
 </ul>



<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
$pid = $_POST['PID'];
$aaa=   $_SESSION["u2"];
//$contact = $_POST['contact'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM products where id='$pid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {


      $ppid= $row['id'];
      $oname= $row['pname'];
      $oprice= $row['price'];
      $otype=$row['ptype'];
      $avai=$row['avail'];
   }
} else {
   echo "invalid user";
   echo "ff";
}
if($avai=="Available"){
$sql = "insert into orders(PID,oname,oprice,otype,oby,odate) values('$ppid','$oname','$oprice','$otype','$aaa',now());";
$result = $conn->query($sql);
if($result){
  echo "Ordered Succcessfully";
  echo "<br>";
  echo "<a href='products.php'>Order More</a>";
  echo "<br>";
  echo "<a href='homepage.php'>GO to Home</a>";
}
else{
  echo "Error: INVALID PRODUCT ID";
  echo "<br>";
  echo "<a href='homepage.php'>GO to home</a>";
}

$conn->close();
}
else {
  echo"Product IS Not Available Sorry For Incovinence";

}
?>
<br>
<form class="" action="products.php" method="post">
  <input  class="btn btn-primary"type="submit" name="" value="GO BACK To Products">

</form>
</body>
</html>
