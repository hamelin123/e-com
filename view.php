<?php session_start();?>
<?php
      require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<title>View All</title>
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
      <a class="nav-link btn-dark" href="shop.php">Shop <span class="sr-only"></span></a>
	  </li>
	  <li><a class="nav-link btn-dark" href="cart.php">Cart <span class="badge"></span></a></li>
                        </ul>
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
<div class="card-body">
<h3 class="card-title">รายการชื่อผู้สั่งซื้อสินค้า</h3>
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID Order</th>
			  <th>Name</th>
			  <th>Lastname</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Province</th>
              <th>District</th>
              <th>SubDistrict</th>
              <th>Zipcode</th>
              <th>Date</th>
            </tr>
			</thead>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM `order` WHERE `id` = '".$id."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();  


?>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["lastname"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["phone"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["province"];?></td>
    <td><?php echo $row["district"];?></td>
    <td><?php echo $row["subdistrict"];?></td>
    <td><?php echo $row["zipcode"];?></td>
    <td><?php echo $row["date"];?></td>

<tr> <a class="navbar-brand" href="https://www.facebook.com/jo.pisit">
  <img src="image/1.jpg">
  <-- ถ่ายหน้าจอนี้และส่งให้พ่อค้าเพื่อความแน่ใจ
  </a> </tr>
  <th><a href="clear.php" class="btn btn-sm btn-primary" > Back To Shop</a></th>
</body>
</html>