
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen";
$id = $_POST['users_email'];
$pass = $_POST['users_pass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password, uid FROM user where username='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       if($id==$row["username"] && $pass==$row["password"]){
         session_start();
         $_SESSION["u2"] = $row["username"];
         header("location: homepage.php");
         echo "connected";
       }
       else{
         echo "invalid Wrong password";
         echo "<a href='home.html'>GO BACK</a>";
       }
   }
} else {
   echo "invalid user";
   echo "<a href='home.html'>GO BACK</a>";
}
$conn->close();
?>
