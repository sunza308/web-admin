<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php 
     
      $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");

      if(isset($_POST['insert'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $status = mysqli_real_escape_string($con,$_POST['status']);
        $tel = mysqli_real_escape_string($con,$_POST['tel']);
        if ($con ->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
            exit();
          }
              $sql = "INSERT INTO `users` (`id`, `username`, `password`, `name`, `picture`, `status`, `Fname`, `Lname`, `tel`) VALUES (NULL, '$username', '$password', '$name', '', '$status', '', '', '$tel');";
              //echo $sql;
              
              $result = $con->query($sql);
              
               header("location: Customer.php");
              mysqli_close($con);
      }

      ?> 
   
    <title>Form Add</title>
  </head>

<body>
<div style='margin-left:10rem;margin-right:10rem;margin-top:5rem'>
<div style='text-align:center'>
<img src="img/customer.png" width="100" height="100">
</div>

<form method="POST" action="FormAdd.php" >
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password">
  </div>
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Status</label>
  </div>
  <select class="custom-select" id="status" name="status">
    <!-- <option selected>Choose...</option> -->
    <option value="1">ลูกค้า</option>
    <!-- <option value="2"></option> -->
  
  </select>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tel.</label>
    <input type="text" class="form-control" id="tel" aria-describedby="emailHelp" name="tel">

  <div style="margin-top:2rem">
  <input type="submit" name="insert" class="btn btn-success" value="บันทึกข้อมูล">
  <!-- <a  style=
              " 
                width: 115px;
                height: 25px;
                background: #007bff;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                color: white;
                font-weight: bold;
                text-decoration: none;"
                href="./Customer.php"
  >บันทึกข้อมูล</a>
  </div> -->

</form>
</div>


</body>

</hmtl>

