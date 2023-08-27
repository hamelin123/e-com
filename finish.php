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
<body background="image/bg.jpg">
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
      <?php if (isset($_SESSION['id'])) { ?>
      <li class="nav-item active">
      <a class="nav-link btn-dark" href="shop.php">Shop <span class="sr-only"></span></a>
      </li>
        <li class="nav-item active">
      <a class="nav-link btn-dark " href="cart.php">Cart <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link btn-dark " href="contact.php">Contact <span class="sr-only"></span></a>
      </li>
      <?php
      }
      ?>
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
 <?php
 
 echo '<script> alert("Finish Your Order!!") </script>';
                            ?>
                            <table width="400"  border="1">
                            <div class = "container col-12 col-sm-6 col-md-1 p-5">
                              <div class="row">
      <h3>Menu</h3>
                            <a class="btn btn-info" href="view.php?id=<?php echo $_GET["id"];?>" >View Order</a>
                                                        <h4 >Or </h4>
                            <a class="btn btn-primary" href="shop.php" >Go To Shop</a>

                            <h4 >And </h4>
                            <a class="btn btn-warning" href="index.php" >Go To Index</a>
                            </div>
                            </table>
                            <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <?php
if(@$_GET['page'] == 'index');
require_once('inc/footer.php');
?>
</body>
</html>