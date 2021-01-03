<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO user (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New user ($fullname) is created successfully <br>";
  echo "<a href=\"login.php\"> Go to login page</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
