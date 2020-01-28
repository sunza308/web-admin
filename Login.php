
<!doctype html>
<html lang="en">
<div class="mx-auto" "login">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <?php
      $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");

    

      if(isset($_POST['submit'])){

        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

          if ($con ->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
            exit();
          }else{
            if($username!=="" && $password!==""){    
             
              $sql = "SELECT * FROM `users` WHERE `username`= '$username' AND `password`='$password'";
              // $sql = "SELECT * FROM `users` ";
              
              $result = $con->query($sql);
              $data = $result->fetch_assoc();

              // echo  $result->num_rows ;
              // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            
              $count = $result->num_rows ;
              // echo $count;
              if($count == 1){
                header("location: Customer.php");
              }
              else{
                echo"<script language=\"JavaScript\">";
                echo 'alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง")';
                echo '</script>';
                //header("location: Login.php");
               


              }
             }
          }  
      }
    ?>
    <title>Login</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
     <div class="col-md-5 mx-auto">
       <div class="card card-login mx-auto mt-5">

         <form action="Login.php" method="POST">
         <div class="card-header p-3 mb-2 bg-light text-white">
         <div class="text-center">         
             <img src="img/logos.png" class="rounded" alt="Responsive image" width="150"  height="100">
         </div>
         </div>
         <div class="card-body">
             <div class="form-group row">
               <label for="username" class="col-sm-12 col-form-label">Username</label>
               <div class="col-sm-12">
                 <input type="text" class="form-control" id="username" name="username">
               </div>
             </div>
             <div class="form-group row">
               <label for="password" class="col-sm-12 col-form-label">Password</label>
               <div class= "col-sm-12">
                  <input type="password" class="form-control" id="password" name="password">
               </div>
             </div>
         </div>
         <div style="text-align: center">
             <input type="submit" name="submit" class="btn btn-info" value="Login">
         </div>
         </form>

       </div>
     </div>
  </div>
</div>
<!-- jquery -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- jquery -->
  </body>
</html>