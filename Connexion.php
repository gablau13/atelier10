<?php
$servername = "localhost";
$username = "username";
$password = "password";
$name="Ecole";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



?>