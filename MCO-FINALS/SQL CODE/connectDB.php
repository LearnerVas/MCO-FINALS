<html>
<body>
 <form action="resultDB.php" method="GET"> <!--If you want to add patient or staff-->
   First Name: <input type="text" name="fname"><br>
   Last Name: <input type="text" name="lname"><br>
   Contact Number: <input type="text" name="conNum"><br>
  <input type="submit">
 </form>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcoweb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT as_ID, as_fname, as_lname, as_conNum FROM adminStaff";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "User ID: " . $row["as_ID"]. " <br> First name: " . $row["as_fname"]. " <br> Last Name: " . $row["as_lname"]. "<br> Contact Number: " .$row["as_conNum"];
  }
} else {
  echo "0 results";
}
?>
</body>
</html>
