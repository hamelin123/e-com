<?php session_start();?>
<?php
      require_once('connect.php');
      $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
      $sql = "SELECT * FROM `article` WHERE `tag` LIKE '%".$tag."%'";
      $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<title>Shop</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Shortcut Icon" href="image/cover.png">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
</head>
<body>
    <!-- Start Bar -->
    <!-- Start Lift Bar -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
    <div class="container">
  <img src="image/Lukkycom.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn-dark" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link btn-dark" href="shop.php">Shop <span class="sr-only"></span></a>
      </li>
        <li class="nav-item active">
      <a class="nav-link btn-dark " href="cart.php">Cart <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link btn-dark " href="contact.php">Contact <span class="sr-only"></span></a>
      </li>
    </ul>
    <!-- End Lift Bar -->
    <!--Start Right Bar -->
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['id'])) { ?>
      <li class="nav-item active">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        User: <?php echo $_SESSION['username']?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <?php }else {?>
      <li class="nav-item">
        <a class="btn btn-success" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-info" href="register.php">Register</a>
      </li>
      <?php }?>
    </ul>
</div>
  </div>
</nav>
<!-- End Right Bar -->
<!-- End Bar -->
<section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="shop.php?tag=all">
                        <button class="btn btn-success <?php echo $tag == 'all' ? 'active': '' ?> ">ทั้งหมด</button>
                    </a>
                    <a href="shop.php?tag=กระเป๋าโน๊ตบุ๊ค">
                        <button class="btn btn-success <?php echo $tag == 'กระเป๋าโน๊ตบุ๊ค' ? 'active': '' ?>">กระเป๋าโน๊ตบุ๊ค</button>
                    </a>
                    <a href="shop.php?tag=โน๊ตบุ๊คมือ2">
                        <button class="btn btn-success <?php echo $tag == 'โน๊ตบุ๊คมือ2' ? 'active': '' ?>">โน๊ตบุ๊คมือ2</button>
                    </a>
                    <a href="shop.php?tag=อุปกรณ์คอมพิวเตอร์">
                        <button class="btn btn-success <?php echo $tag == 'อุปกรณ์คอมพิวเตอร์' ? 'active': '' ?>">อุปกรณ์คอมพิวเตอร์</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            if ($result->num_rows){
                while($row = $result->fetch_assoc()) { 
            ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                        <img class="card-img-top" src="image/product/<?php echo $row['image'] ?>" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <h4 class="card-text">Price : <?php echo $row['price'] ?></h4>
                        <h3 class="card-title">Detail : <?php echo $row['detail'] ?></h3>
                    </div>
                    <div class="p-3">
                        <a href="order.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-block">หยิบใส่ตะกร้า</a>
                    </div>
                </div>
            </section>
            <?php 
                }
            } else {
            ?>
            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>  
            <?php 
            } 
            ?>      

        </div>
    </section>
<!-- Start Menu2 -->
<!-- Start Title -->
<?php
if(@$_GET['page'] == 'index');
require_once('inc/footer.php');
?>
<script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>