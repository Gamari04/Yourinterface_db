<?php include('header.php');
    include "connection.php";
    $query = "SELECT  name , email FROM `clients1`";
   
    $result = mysqli_query($connection , $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href="../assets/css/sidebar.css" rel="stylesheet" />
</head>
<body>
<table id="fresh-table" class="table">
    <thead>
      <!-- <th data-field="id">ID</th> -->
      <th data-field="name">Client name</th>
      <th data-field="Email">Email</th>
      <!-- <th data-field="Budget">Budget</th> -->
      <!-- <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
      
    </thead>
    <tbody>
 <?php
    while($row = mysqli_fetch_assoc($result)){
?>
      <tr> 
     
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
       
       
  <td><!-- Button trigger modal -->
<button type="button" class="btn  sidebar" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Project
</button>
</td>
<!-- Modal -->

      </tr>
      
      <?php } ?>
    </tbody>
  </table>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php

    $query = "SELECT name FROM `project`";
    $result = mysqli_query($connection , $query);
?>
<table id="fresh-table" class="table">
    <thead>
      
      <th data-field="name">Name</th>
     
    </thead>
    <tbody>
 <?php
    while($row = mysqli_fetch_assoc($result)){
?>
      <tr>
      
        <td><?php echo $row['name']?></td>
      
        
      </tr>
      
      <?php } ?>
    </tbody>
  </table>
  <?php

if(isset($_POST["submit1"])){
    echo "dkhel";
    $Name = $_POST["Name"];

    // $email = $_POST["email"];
    // $Budget = $_POST["Budget"];
    $requet = "INSERT INTO `confirmed`(`name`) VALUES ('$Name')";
    $resultat = mysqli_query($connection,$requet);
    if(isset($resultat)){
        echo "dkhel";
        header("location:Confirmed.php?msg=added to the database successfuly");
    }
    else{
        echo "error";
    }
}

?>
<form action="" method="post">
  <input class="form-control" type="text" name="Name" placeholder="Choose a name of Project" aria-label="default input example">
 
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="submit1" class="btn btn-primary">Confermed</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php include('footer.php');?>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
