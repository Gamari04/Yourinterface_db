<?php
    include "connection.php";
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $Budget = $_POST["Budget"];
        $requet = "INSERT INTO `clients1`(`Name`, `Email`, `Budget`) VALUES ('$name','$email','$Budget')";
        $query = mysqli_query($connection,$requet);
        if(isset($query)){
            header("location:index.php?msg=added to the database successfuly");
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
    <link  href="../assets/css/form.css" rel="stylesheet" />
</head>
<body>
<!-- <form action="" method="POST">
    
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
</form> -->


<div class="container">
  <button class="restart">Send again! 🔁</button>
  <form class="contactform" action="" method="post">
    <input  type="text" placeholder="Enter your name" name="name">
    <input  type="text" placeholder="Enter your email " name="email">
    <input  type="number" placeholder="Enter your budget" name="Budget">
  

    <button class="button" type="submit" name="submit">
    <div class="text">
      <span>Submit</span>
      <svg class="rocket" id="Capa_1" height="30" viewBox="0 0 512.056 512.056" width="30" xmlns="http://www.w3.org/2000/svg" fill="#fff">
        <path
          d="m350.038 120.265c-7.206-36.687-27.738-70.157-57.939-92.992l-36.071-27.273-36.071 27.272c-30.201 22.835-50.733 56.305-57.939 92.992h188.02z" />
        <path d="m394.777 252.144v151.096h77.609v-69.027z" />
        <path d="m337.633 221.387c-11.732 0-21.277 9.545-21.277 21.278v145.279h48.422v-145.279c0-11.732-9.545-21.278-21.277-21.278z" />
        <path d="m195.701 242.665c0-11.732-9.545-21.278-21.277-21.278h-5.867c-11.732 0-21.277 9.545-21.277 21.278v145.279h48.422v-145.279z" />
        <path d="m117.279 252.144-77.609 82.069v69.027h77.609z" />
        <path d="m286.355 417.944v-175.279c0-28.275 23.003-51.278 51.277-51.278h5.867c3.213 0 6.353.311 9.403.879v-42.001h-193.75v42.001c3.051-.568 6.19-.879 9.403-.879h5.867c28.274 0 51.277 23.003 51.277 51.278v175.279h-54.474c-2.706 12.642-2.828 26.509 3.811 38.389l4.293 7.683h25.264c5.605 13.589 18.466 35.112 45.957 45.893l5.477 2.148 5.477-2.148c27.491-10.781 40.352-32.303 45.957-45.893h25.264l4.294-7.683c6.638-11.88 6.516-25.747 3.81-38.389z" />
      </svg>
      <span>form</span>
    </div>
  </button>
  </form>

</div>
<script src="../assets/js/form.js"></script>
</body>
</html>