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
    <a class="nav-link" href="avai.php">Available Products IN Canteen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="logout.php" >logout</a>
  </li>
</ul>
<table class="table" border="1">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Gender</td>
    <td>your username</td>
    <td>Address</td>
    <td>contact</td>
  </tr>
  <?php
  if(isset($_GET['id'])){
  $userid = $_GET['id'];
} else {
  echo "failed";
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM user where username='$userid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>";
     echo $row['uid'];
     echo "</td><td>";
     echo $row['name'];
     echo "</td><td>";
     echo $row['gender'];
     echo "</td><td>";
     echo $row['username'];
     echo "</td><td>";
     echo $row['address'];
     echo "</td><td>";
     echo $row['contact'];
     echo "</td><td>";

     echo "</td></tr>";
   }
}
 ?>

</table>

</form>
<form method="post" action="mail\cancleorder.php" >
  <label for="canc">Enter The Order Id U want to cancel: </label>
  <input type="text" name="canc" >
  <input type="submit" value="Cancle">

</form>
<form method="post" action="mail\mpayment.php" >
  <label for="canc">Enter The Order Id U want to request payment for: </label>
  <input type="text" name="req" >
  <input type="submit" value="Request">

</form>
<form action="adpro.php" >
  <input type="submit" value="Go Back TO Orders">
</form>

  </body>
</html>
