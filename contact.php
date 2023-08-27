<?php session_start();?>
<?php
    include('connect.php');
    if(isset($_POST['submit'])){

        $sql = "INSERT INTO `contact` (`name`, `phone`, `email`, `detail`, `date`, `updata`)
         VALUES ('".$_POST['name']."', '".$_POST['phone']."',
          '".$_POST['email']."', '".$_POST['detail']."',
           '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."');";

$result = $conn->query($sql);
            if($result){
                echo '<script> alert("ส่งข้อความสำเร็จ") </script>';
                header('Refresh:0; url=contact.php');
            }

        }
    ?>
        <title>Contact</title>
<?php
if(@$_GET['page'] == 'register');
require_once('inc/header.php');
?>
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

<!-- Section Page-title -->
    <header class="jarallax"  data-jarallax='{ "speed": 0.6 }'style="background-image: url(https://scontent.fbkk5-5.fna.fbcdn.net/v/t31.0-8/26962457_1848626591876682_3326168801229624653_o.jpg?_nc_cat=0&oh=d25392ae384ea71d38709a56693b8a40&oe=5B5BE48D);">
        <div class="blog-image">
        </div>
    </header>

<!-- Section Blog -->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">แบบฟอร์มติดต่อเรา</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">กรุงเทพมหานคร ภาษีเจริญ บางหว้า</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p  class="card-text">(+66)96-729-6846</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope  py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p  class="card-text">example@email.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> แบบฟอร์มติดต่อเรา </h5>
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ - นามสกุล</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อของคุณ" require>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์ของคุณ" require>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมลล์</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="example@email.com" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail">ข้อความของคุณ</label>
                                <textarea id="detail" name="detail" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี้"></textarea require>
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary d-block mx-auto">ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

</body>
</html>