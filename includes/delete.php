<?php
    include "connection.php";
        $id = $_GET['id'];
        $query = "DELETE FROM `clients1` WHERE id = $id";
        $result = mysqli_query($connection , $query);
        if(isset($result)){
            header("location:index.php?msg=deleted database successfuly");
        }
        else{
            echo "error";
        }
?>