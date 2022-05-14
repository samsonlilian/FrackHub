<?php
$link = mysqli_connect("localhost","root","","untitled");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to Database: " . mysqli_connect_error();
  }
?>

<!-- $username ="root";
$password = "password";
$host = "localhost";
$table = "shop";
$conn = new mysqli("$host", "$username", "$password", "$table"); -->