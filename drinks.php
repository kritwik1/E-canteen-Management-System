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
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<table class="table" border="1">
  <tr>
    <td class="table-success">PID</td>
    <td class="table-success">Product Name</td>

    <td class="table-success">Product Price</td>
    <td class="table-success">Availability</td>
  </tr>
</div>



<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
//$pass = $_POST['users_pass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products where ptype='drinks'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>";
     echo $row['id'];
      echo "</td><td>";
     echo $row['pname'];
      echo "</td><td>";
     echo $row['price'];
      echo "</td><td>";
      echo $row['avail'];
    echo "</td><td>";
   }
} else {
   echo "invalid user";
   echo "ff";
}
$conn->close();
?>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="mail\dmail.php" method="post">
      <input class="form-control" type="text" name="PID" id="PID" placeholder="Enter the PID of product you want to order:">
      <div style="text-align:center">
      <input class="btn btn-success" type="submit" name="sun" value="order now">
    </div>
    </form>
    <form  action="products.php" method="post">
      <input  class="btn btn-dark"type="submit" name="" value="GO BACK">
    </form>
  </body>
</html>
