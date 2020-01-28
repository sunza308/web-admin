<?php 
     
     $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");

    $Id = $_GET['cid'];
    if ($con ->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
      exit();
    }
    
      $sql = "DELETE FROM `users` WHERE `id` = $Id";
      // echo $sql;
      
      $result = $con->query($sql);
      
      header("location: Customer.php");
      mysqli_close($con);
    
?> 

