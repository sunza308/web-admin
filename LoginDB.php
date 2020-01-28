<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {

    $user = $_POST['username'];
    $password = $_POST['password'];
    // $conn = new mysqli('203.154.83.137','root','Korn2540#Server','db_tree_store');

    require_once 'connect.php';
    $sql = "SELECT * FROM `users` ";
    // $sql = "select * from member where username ='$username' and password ='$password' ";
    // $num = $conn->query($sql);
    // $response = mysqli_query($conn, $sql);
    // echo $num;
    // echo $response;
   
    // $result = $conn->query($sql);
    // echo $result;
    $result = array();
    $result['login'] = array();

    // if($user === 'admin'&& $password === 'admin' ){
    //     header('location:Customer.php');
    //       //mysqli_close($conn);
    // }
    // if ( mysqli_num_rows($response) === 1 ) {
        
    //     $row = mysqli_fetch_assoc($response);
    //     if ( password_verify($password, $row['password'])) {
    //         $index['user'] = $row['username'];
    //         $index['name'] = $row['name'];

    //         array_push($result['login'], $index);

    //         $result['success'] = "1";
    //         $result['message'] = "success";
    //         $_SESSION['user'] = $row['username'];
    //         $_SESSION['name'] = $row['name'];

    //         header('location:Customer.php');
    //         mysqli_close($conn);
    //         echo $sql;

    //     } else {
    //         $result['success'] = "0";
    //         $result['message'] = "error";
    //         echo "dddd";
    //         // echo "Korn";
    //         mysqli_close($conn);
    //     }}
    }
?>