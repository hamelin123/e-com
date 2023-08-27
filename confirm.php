<?php session_start();?>
<?php
      require_once('connect.php');

$id = $_GET['id'];

$sql = "SELECT name, lastname, email, phone, address, province, district, subdistrict, zipcode FROM `member` WHERE `id` = '".$id."'"; 
$result = $conn->query($sql);

$row = $result->fetch_assoc();
 ?>

<!DOCTYPE html>
<html lang="en">
<title>Confirm</title>
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
  <!-- Main content -->
  <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">ข้อมูลก่อนส่งของ</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="savecheckout.php" method="post">
          <div class="card-body">
          <div class="form-group">
                            <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder = "ชื่อจริง" required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder = "นามสกุล" required> 
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder = "อีเมล์" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder = "เบอรโทรศัพท์" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" name="address" placeholder = "ที่อยู่/บ้านเลขที่ ถนน หมู่บ้าน ฯลฯ" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="province" class="col-sm-3 col-form-label">Province</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="province" name="province" placeholder = "จังหวัด" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="district" class="col-sm-3 col-form-label">District</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="district" name="district" placeholder = "อำเภอ/เขต" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subdistrict" class="col-sm-3 col-form-label">Subdistrict</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="amphoe" name="subdistrict" placeholder = "ตำบล/แขวง" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zipcode" class="col-sm-3 col-form-label">Zipcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder = "รหัสไปรสณีย์" required>
                                </div>
      </div>
          </div>
          <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <br>
    <!--Start script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <script>
        function readURL(input){
            var reader = new FileReader();

            reader.onload = function(e){
                console.log(e.target.result)
                $('#imgUpload').attr('src',e.target.result).width(300)
            }

            reader.readAsDataURL(input.files[0]);
        }

        $.Thailand({
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
});
</script>
<!-- End script -->

</body>
</html>
