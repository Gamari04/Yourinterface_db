<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?> 

