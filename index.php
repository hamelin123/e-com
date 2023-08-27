<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content=<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <link rel="Shortcut Icon" href="image/cover.png">
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
<!-- Start Image -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/promote.jpg" class="d-block w-100" alt="1">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End Image -->
<!-- Start Body -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <marquee behavior="scroll" font-size="20">
    <marquee>-- ยินดีต้อนรับสู่ร้าน LuckyCom 
    <img src="image/cover.png" width="10" height="10" alt="cover"/>
     --</marquee>
    <h1 class="display-4"> -- ยินดีต้อนรับเข้าสู่หน้าเว็บของร้าน LuckyCom 
    <img src="image/cover.png" alt="cover"/>
     --</h1>
    <p class="lead">-- ร้านของเรานั้น รับจำหน่ายอุปกรณ์ และ รับซ่อมอุปกรณ์ เราทำด้วยความเต็มใจ 
    <img src="image/cover.png" width="30" height="30"alt="cover"/>
     --</p>
</marquee>
<a class="navbar-brand" href="https://www.facebook.com/jo.pisit">
  <img src="image/1.jpg">
  <-- เฟสบุ๊คส่วนตัวของพ่อค้า
  </a>
  <a class="navbar-brand" href="https://www.facebook.com/Lucky-Com-Zeer-rangsit-1702910569764517/?ref=br_rs">
  <img src="image/2.jpg">
  <-- เพจของพ่อค้า
  </a>
  <a class="navbar-brand" href="https://www.facebook.com/Targus4u/">
  <img src="image/3.jpg">
  <-- เพจขายกระเป๋า TARGUS
  </a>
  </div>
</div>
<?php
if(@$_GET['page'] == 'index');
require_once('inc/footer.php');
?>
<!-- End Body -->
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
<!-- End Body -->
</body>
</html>
