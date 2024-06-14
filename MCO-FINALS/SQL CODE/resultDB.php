<html>
<body>
 <?php
$servername = "localhost"; //get the server name
$username = "root"; //the username
$password = ""; //your password
$dbname = "mcoweb"; //the database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$fname = $_GET['fname']; //to get the data
$lname = $_GET['lname'];
$conNum = $_GET['conNum'];

$sql = "INSERT INTO adminstaff VALUES ('', '$fname', '$lname', '$conNum')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

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