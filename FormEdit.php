<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <?php 
     
     $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");

    $Id = $_GET['id'];
    if ($con ->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
      exit();
    }
    if(isset($_POST['add'])){
      $id = mysqli_real_escape_string($con,$_POST['id']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $status = mysqli_real_escape_string($con,$_POST['status']);
      $tel = mysqli_real_escape_string($con,$_POST['tel']);
      $sql = "UPDATE `users`  SET `username`= '$username' ,`password`= '$password' ,`name`= '$name' ,`status`= '$status' ,`tel`= '$tel'  WHERE `id` = $id";
      // echo $sql;
      
      $result = $con->query($sql);
      
      header("location: Customer.php");
      mysqli_close($con);
    }
    
    else{
          $sql = "SELECT  * FROM `users` WHERE `id` = $Id";
        //  echo $sql;
          
          $result = $con->query($sql);
        
        $row = mysqli_fetch_array($result);
    }
     ?> 
    <title>Form Edit</title>
  </head>

<body>
<div style='margin-left:10rem;margin-right:10rem;margin-top:5rem'>
<div style='text-align:center'>
<img src="img/customer.png" width="100" height="100">
</div>

<form method="POST" action="FormEdit.php" >
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" value=<?= $row['username']?> id="username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" value=<?= $row['password']?> id="password" name="password">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"value=<?= $row['name']?> id="name" name="name" >
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Status</label>
  </div>
  <select class="custom-select" id="status" name="status">
    <!-- <option selected>Choose...</option> -->
    <option value=<?= $row['status']?>>ลูกค้า</option>
    <!-- <option value=2>2</option> -->
  
  </select>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tel.</label>
    <input type="text"value=<?= $row['tel']?> class="form-control" id="tel" name ="tel">

  <div style="margin-top:2rem">
  <input type="hidden"value=<?=  $row['id']?> class="form-control" id="id" name ="id">
  
  <input type="submit" name="add" class="btn btn-success" value="บันทึกข้อมูล">

  </div>
  <!-- <button type="text" class="btn btn-primary">Save</button> -->
</form>
</div>


</body>

</hmtl>

