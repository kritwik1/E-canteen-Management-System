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
     <td>ID</td>
     <td>PID</td>
     <td>Order Name</td>
     <td>Order Price</td>
     <td>Order Type</td>
      <td>Order By</td>
     <td>Orderd Date and Time</td>
     <td>Payment Status</td>
       <td>Order Status</td>
       <td>Order Completed Date and Time</td>
   </tr>
   <?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "canteen";
// $aaa=   $_SESSION["u2"];
 $conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "SELECT * FROM orders ";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $userid= $row['oby'];
      echo "<tr><td>";
      echo $row['id'];
      echo "</td><td>";
      echo $row['pid'];
      echo "</td><td>";
      echo $row['oname'];
      echo "</td><td>";
      echo "₹". $row['oprice'];
      echo "</td><td>";
      echo $row['otype'];
      echo "</td><td>";
      ?>
      <a href="userdetail.php?id=<?php echo $userid; ?>"><?php echo $row['oby'] ?></a>
      <?php
      echo "</td><td>";
      echo $row['odate'];
      echo "</td><td>";
      echo $row['payment'];
      echo "</td><td>";
      echo $row['ostatus'];
      echo "</td><td>";
      echo $row['ocdate'];
      echo "</td><td>";

      echo "</td></tr>";
    }
 }
  ?>
 </table>




     <form method="post">
       <label for="pid">Enter the ID of product whose Order is completed:</label>
       <input type="text" name="ID" id="ID">
       <input type="submit" name="sun" value="Submit">
     </form>


 <?php
   if(isset($_POST['sun'])){
     $servername = "localhost";
     $username = "root";
     $password = "root";
     $dbname = "canteen";
       $ti=$_POST['ID'];
     $conn = new mysqli($servername, $username, $password, $dbname);
     $sql = "update orders set ostatus='Completed',ocdate=now() where id='$ti'";
     if($result = $conn->query($sql)){
       echo"<b> NOTE:</b>Refresh the page to see update";
     }
     else {
       echo"ID iS not valid";
     }

   }

  ?>
  <form method="post">
    <label for="pid">Enter the ID of product whose payment is completed:</label>
    <input type="text" name="ID" id="ID">
    <input type="submit" name="sunn" value="Submit">
  </form>
  <h3><b> NOTE:</b>You can not cancle the order if it has been completed</h3>


<?php
if(isset($_POST['sunn'])){
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "canteen";
    $ti=$_POST['ID'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "update orders set payment='Payment Done' where id='$ti'";
  if($result = $conn->query($sql)){
    echo"<b> NOTE:</b>Refresh the page to see update";
  }
  else {
    echo"ID iS not valid";
  }

}

?>
<form method="post">
  <label for="pid">Enter the ID of product you want to cancle:</label>
  <input type="text" name="ID" id="ID">
  <input type="submit" name="sunk" value="CANCLE NOW">
</form>

<?php
if(isset($_POST['sunk'])){
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
  $ti=$_POST['ID'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "update orders set ostatus='Canclled' where id='$ti'";
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
