<?php include('header.php');

include "connection.php";
$query = "SELECT confirmed.*,confirmed.name, 
clients1.name
FROM `confirmed` 
INNER JOIN clients1 ON confirmed.client_id = clients1.id 
 ";
$result = mysqli_query($connection , $query);
?>
<table id="fresh-table" class="table">
    <thead>
      <th data-field="id">ID</th>
      <th data-field="name">Name of Project</th>
     
      
      
    </thead>
    <tbody>
 <?php
    while($row = mysqli_fetch_assoc($result)){
?>
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
      
       
      </tr>
      
      <?php } ?>
    </tbody>
  </table>
  <?php include('footer.php');?>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>