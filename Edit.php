<?php 
     
     $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");

     if(isset($_GET['edit'])){
       $Id = $_POST['username']
    
       if ($con ->connect_errno) {
           echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
           exit();
         }
             $sql = "INSERT INTO `users` (`id`, `username`, `password`, `name`, `picture`, `status`, `Fname`, `Lname`, `tel`) VALUES (NULL, '$username', '$password', '$name', '', '$status', '', '', '$tel');";
             echo $sql;
             
             $result = $con->query($sql);
             
             header("location: Customer.php");
             mysqli_close($con);
     }

     ?> 