<?php session_start();?>
<?php
      require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<title>Cart</title>
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
<div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
			  <th>Name</th>
			  <th>Image</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Total</th>
              <th>Delete</th>
            </tr>
			</thead>
      <?php
      
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strid"][$i] != "")
	  {
    $sql = "SELECT * FROM `article` WHERE id = '".$_SESSION["strid"][$i]."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
		$Total = $_SESSION["strqty"][$i] * $row["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $_SESSION["strid"][$i];?></td>
		<td><?php echo $row["name"];?></td>
    <td><img class="img-fluid d-block mx-auto" src="image/product/<?php echo $row['image'] ?>" width="150px"  alt="ss"></td> 
    <td><?php echo $row["price"];?></td>
    <td><?php echo $_SESSION["strqty"][$i];?></td>
    <td><?php echo number_format($Total,2);?></td>
    <td>                  <a href="delete.php?Line=<?php echo $i;?>" onclick="deleteItem(<?php echo $row['id']; ?>);" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> Delete</td>
	  </tr>
	  <?php
	  }
  }
  ?>
      <tr>
      <th>SUM</th>
      <td>
      <h3>Sum Total : <?php echo number_format($SumTotal,2);?> Bath</h3>
<br><br><a href="shop.php" class="btn btn-sm btn-info">GO TO Shop</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php" class="btn btn-sm btn-primary" >CheckOut</a>
<?php
	}
?>
      </tr>
</td>

<!-- End Body -->
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
<!-- End Body -->
</body>
</html>
