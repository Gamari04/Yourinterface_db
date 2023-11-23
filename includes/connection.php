<?php

$connection = mysqli_connect("localhost" , "root" , "" , "design_agency");
// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?> 

