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
  <div class="container">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<table class="table" border="1">
  <tr>
    <td class="table-warning">ID</td>
    <td class="table-warning">PID</td>
    <td class="table-warning">Order Name</td>
    <td class="table-warning">Order Price</td>
    <td class="table-warning">Order Type</td>
    <td class="table-warning">Order Date</td>
    <td class="table-warning">Payment Status</td>
      <td class="table-warning">Order Status</td>
       <td class="table-warning">Order Completed Date and Time</td>
  </tr>
</div>
  <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
$aaa=   $_SESSION["u2"];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM orders where oby='$aaa'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>";
     echo $row['id'];
     echo "</td><td>";
     echo $row['pid'];
     echo "</td><td>";
     echo $row['oname'];
     echo "</td><td>";
     echo "₹".$row['oprice'];
     echo "</td><td>";
     echo $row['otype'];
     echo "</td><td>";
     echo $row['odate'];
     echo "</td><td>";
     echo $row['payment'];
     echo "</td><td>";
     echo $row['ostatus'];
     echo "</td><td>";
     echo $row['ocdate'];
     $com= $row['ostatus'];
     echo "</td><td>";

     echo "</td></tr>";
   }
}
 ?>
</table>
</div>

<h3 class="alert alert-warning alert-dismissible fade show"><b> NOTE:</b>You can not cancel the order if it has been completed</h3>

<div class="form-group">
    <form method="post">

      <input  class="form-control" type="text" name="ID" id="ID" placeholder="Enter the ID of product you want to cancel:">
      <br>
      <div style="text-align:center">
      <input  class="btn btn-dark" type="submit" name="sun" value="CANCLE">
    </div>
    </form>
  </div>


<?php
  if(isset($_POST['sun'])){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "canteen";
      $ti=$_POST['ID'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "update orders set ostatus='Cancelled' where id='$ti'";
    if($result = $conn->query($sql)){
      echo"<b> NOTE:</b>Refresh the page to see update";
    }
    else {
      echo"ID iS not valid";
    }

  }

 ?>
 <div class="alert alert-success" role="alert">
 <h5>You can pay through UPI Our UPI ID is KK@icic or Make payment When u Visit</h5>
 <hr>
 <h6 class="mb-0">(Do not forget to add description of product(ID) while paying)</h6>
</div>
 <form  action="homepage.php" method="post">
   <input  class="btn btn-primary" type="submit" name="" value="GO BACK">
 </form>
</body>
</html>
