<?php  include './Header.php'?>
<?php
      $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");
     

      if ($con ->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
        exit();
      }
          $sql = "SELECT * FROM `users` WHERE `status`= 1 ";
          $result = $con->query($sql);
          
    ?>
          
     
     
      
<div style="margin: 1rem">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">รายชื่อลูกค้า</a></li>
  </ol>
</nav>


<table class="table">
     
  <thead>
 
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Username</th>
      <!-- <th scope="col">Password</th> -->
      <th scope="col">Name</th>
      <th scope="col">Tel</th>
      <th scope="col">Status</th>
      <th scope="col">Tools</th>
    </tr>
  
  </thead>
  <tbody>
  <?php
    while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?=$row["username"]?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["tel"]?></td>
      <?php if ($row["status"] == 1){ ?>
        <td>ลูกค้า</td>
        <?php } ?>
      
  
      
      <td>
      <div  >
      <a style=" 
                width: 115px;
                height: 25px;
                background: #4caf50;
                padding: 8px;
                padding-left: 1rem;
                padding-right: 1rem;
                text-align: center;
                border-radius: 5px;
                color: white;
                font-weight: bold;
                text-decoration: none;"
                href="./FormEdit.php?id=<?=$row["id"];?>"
          >Edit</a>
      
          <a
           style=" 
                width: 115px;
                height: 25px;
                background: #f44336;
                padding: 8px;
                padding-left: 1rem;
                padding-right: 1rem;
                text-align: center;
                border-radius: 5px;
                color: white;
                font-weight: bold;
                text-decoration: none;"
               href="JavaScript:if(confirm('คุณต้องการลบผู้ใช้นี้หรือไม่ ?') == true){window.location='DeleteUser.php?cid=<?=$row["id"];?>';}"       
          >Delete</a> 
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  

      <!-- <button data-toggle="modal" data-target="#exampleModal"   class="btn btn-raised btn-danger" style="border-radius:5px" >Delete</button> -->
      
      </div>
      </tr>
      <?php
    }
    ?>
  </tbody>

</table>

<div>
<a  style=
              " 
                width: 115px;
                height: 25px;
                background: #4caf50;;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                color: white;
                font-weight: bold;
                text-decoration: none;"
                href="./FormAdd.php"
  >เพิ่มข้อมูล</a>
  <!-- <button type="button" class="btn btn-raised btn-success">Add</button> -->
  </div>
</div>



<?php  include './Footer.php'?>



<style>
  .edit{
    width: 115px;
 height: 25px;
   background: #007bff;
   padding: 10px;
  text-align: center;
  border-radius: 5px;
   color: white;    
   font-weight: bold;
 text-decoration: none;"
  }
</style>