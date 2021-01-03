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

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT id from user where email = '$email' and password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: main.php');
} else {
    header('Location: login.php');
}

$conn->close();
?>
