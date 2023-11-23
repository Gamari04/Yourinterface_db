<?php
    include "includes/connection.php";
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $Budget = $_POST["Budget"];
        $requet = "INSERT INTO `clients`(`Name`, `Email`, `Budget`) VALUES ('$name','$email','$Budget')";
        $query = mysqli_query($connection,$requet);
        if(isset($query)){
            header("location:../index.php?msg=added to the database successfuly");
        }
        else{
            echo "error";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"><br><br>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"><br><br>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Budget</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Budget"><br><br>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>