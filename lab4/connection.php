<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// $conn = new mysqli($servername, $username, $password);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>