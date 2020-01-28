<?php include './Header.php' ?>


<?php
      $con = new mysqli("localhost","root","Korn2540#Server","db_tree_store");
      mysqli_set_charset($con,"utf8");
     

      if ($con ->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
        exit();
      }else{
         $sql = "SELECT * FROM `store` ";
          $result = $con->query($sql);
          
          if(isset($_GET['sid'])) {
            $SID = $_GET['sid'];
           
            if ($con ->connect_errno) {
              echo "Failed to connect to MySQL: " . $mysqli ->connect_error;
              exit();
            }    
              $sql = "SELECT * FROM `goods` WHERE  `store_id` = $SID ";
              // mysqli_set_charset($con,"utf8");
              $results = $con->query($sql);
            
              // mysqli_close($con);

        } else { 
        }
      }   
    ?>


    <div style="margin:3rem">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="#">ร้าน</a></li>
      <!-- <li class="breadcrumb-item"><a href="#">ร้านแรมโบ้</a></li> -->

    </ol>
  </nav>


  <div class="row">

    <?php
    while($row = mysqli_fetch_array($result)) { ?>   
  <div style="display:flex;margin-bottom:2rem;">

    <div class="card" style="width: 18rem;margin:10px;">
      <div class="card-body">
        <h5 class="card-title"><?=$row["store_name"]?></h5>
        <p class="card-text"></p>
        <a href="Store.php?sid=<?=$row["store_id"]?>" class="btn btn-raised btn-primary">ดูข้อมูลสินค้า</a>
      </div>
      </div>
  </div>
  

  <?php
    }
    ?>

    </div>
      <?php
         $sqlstore = "SELECT * FROM `store` WHERE  `store_id` = $SID ";
         // mysqli_set_charset($con,"utf8");
         $store = $con->query($sqlstore);
          $row = mysqli_fetch_array($store) ?>

<div class="card">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page"><?=$row ["store_name"]?></li>
      </ol>
    </nav>
    <div class="card-body">
      <h5 class="card-title"><?=$row["store_name"]?></h5>
     
    
      
      <p class="card-text"></p>
      <table class="table">
        <thead>
          <tr>
          
            <th scope="col">ชื่อ</th>
            <th scope="col">รายละเอียด</th>
            <th scope="col">ราคา</th>
            <th scope="col">รูปภาพสินค้า</th>
          </tr>
        </thead>

        <tbody>
        <?php
      while($rows = mysqli_fetch_array($results)) { ?>  
          <tr>
            <td><?=$rows["name"]?></td>
            <td><?=$rows["detail"]?></td>
            <td><?=$rows["price"]?></td>
            
            <td>
              <div>
                <img src="../uploads/<?=$rows["picture"]?>" width="100" height="100" />
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

</div>
<?php include './Footer.php' ?>