<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
$name = $_POST['pname'];
$ptyp = $_POST['type'];
$pric = $_POST['price'];

//$contact = $_POST['contact'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql = "insert into products(pname,ptype,price) values('$name','$ptyp','$pric');";
$result = $conn->query($sql);
if($result){
  echo "Product Added Succcessfully";
  echo "<br>";
  echo "<a href='newp.html'>Add More</a>";
  echo "<br>";
  echo "<a href='adminhomepage.php'>GO to Home</a>";
}
else{
  echo "Error: INVALID PRODUCT ID";
  echo "<br>";
  echo "<a href='adminhomepage.php'>GO to home</a>";
}

$conn->close();
?>
