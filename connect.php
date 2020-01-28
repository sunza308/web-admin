<?php
     $conn = new mysqli('203.154.83.137','root','Korn2540#Server','db_tree_store');
     mysqli_set_charset($conn,"utf8");
    
     if( $conn->connect_errno){
       die("Connection Failed".$conn->connect_error);
       echo $conn->connect_error;
     }
    //  echo 'ddd';
    // $connect->query("SET NAMES utf8");
    // try{
    //     $pdo = new PDO("mysql:host=10.199.66.227;dbname=19s2_g1;charset=utf8","19S2_g1","xPr2nsT5");
    //     } catch(PDOException $e){
    //         echo"error : ".$e->getMessage();
    //     }
        
     
?>