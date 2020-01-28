<?php 
     
     $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");

    $Id = $_GET['sid'];
    if ($con ->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
      exit();
    }

      $sql = "SELECT * FROM `store` RIGHT JOIN `goods` ON $Id = `goods.store_id` ";
    //    echo $sql;

      $result = $con->query($sql);
      
      //header("location: Store.php");
      mysqli_close($con);
    
?> 

 
<div class="card">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">ร้านแรมโบ้</li>
      </ol>
    </nav>
    <div class="card-body">
      <h5 class="card-title">ร้านแรมโบ้</h5>
      <p class="card-text"></p>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ชื่อ</th>
            <th scope="col">รายละเอียด</th>
            <th scope="col">ราคา</th>
            <th scope="col">ภาพประกอบ</th>
          </tr>
        </thead>

        <tbody>

        <?php
    while($row = mysqli_fetch_array($result)) { ?>  
          <tr>
            <td><?=$row["name"]?></td>
            <td><?=$row["detail"]?></td>
            <td><?=$row["price"]?></td>
            <td>
              <div>
                <img src="img/customer.png" width="30" height="30" />
              </div>
            </td>
            <!-- <td><button class="btn btn-raised btn-info">แก้ไข</button></td> -->
          </tr>

          <?php
    }
    ?>
        </tbody>
      </table>
    </div>
  </div>

