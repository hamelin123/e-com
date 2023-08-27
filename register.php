
    <title>Register</title>
<?php
if(@$_GET['page'] == 'register');
require_once('inc/header.php');
?>
<body background="image/bg.jpg">

    <?php
                include('connect.php');
            if(isset($_POST['submit'])){

                
	 	$email = $_POST['email'];

         $checkemail = "SELECT * FROM member WHERE email = '$email' LIMIT 1" ;
         $check_query = mysqli_query($conn,$checkemail);
         $count_email = mysqli_num_rows($check_query);
         if($count_email > 0){
             echo "<script>alert('มีอีเมล์ผู้ใช้นี้อยู่แล้ว');</script>";
            echo "<meta http-equiv='refresh' content='0;URL=register.php'>";
             exit();
     }
     
              elseif($_POST["password"] != $_POST["Confirm-password"])
            {
             
             echo "<script>alert('รหัสไม่ตรงกัน');</script>";
             echo "<meta http-equiv='refresh' content='0;URL=register.php'>";
                 
         }else{
     


             
                    $sql = "INSERT INTO `member` (`id`, `name`, `lastname`, `email`, `phone`, `address`, `province`, `district`, `subdistrict`, `zipcode`, `username`, `password`, `date`, `update`)
                     VALUES (NULL, '".$_POST['name']."', '".$_POST['lastname']."', '".$_POST['email']."', 
                     '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['province']."', '".$_POST['district']."', 
                     '".$_POST['subdistrict']."', '".$_POST['zipcode']."', '".$_POST['username']."', '".$_POST['password']."', 
                     '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."');";

                    $result = $conn->query($sql) or die($conn->error);

                        if($result){
                            echo '<script> alert("Register Completed!!") </script>';
                            header('Refresh:0; url=login.php');
                        }else{
                            //echo 'NO';
                        }
                

            }
    
        }
    
    ?>




      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto mt-5 ">
                <div class="card">
                    <form  method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            LOGIN ON ACCOUNT
                        </div>
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder = "ชื่อจริง" required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder = "นามสกุล" required> 
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder = "อีเมล์" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder = "เบอรโทรศัพท์" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" name="address" placeholder = "ที่อยู่/บ้านเลขที่ ถนน หมู่บ้าน ฯลฯ" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="province" class="col-sm-3 col-form-label">Province</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="province" name="province" placeholder = "จังหวัด" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="district" class="col-sm-3 col-form-label">District</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="district" name="district" placeholder = "อำเภอ/เขต" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subdistrict" class="col-sm-3 col-form-label">Subdistrict</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="amphoe" name="subdistrict" placeholder = "ตำบล/แขวง" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zipcode" class="col-sm-3 col-form-label">Zipcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder = "รหัสไปรสณีย์" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username" placeholder = "ยูสเซอร์ผู้ใช้" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" placeholder = "รหัสผ่าน" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Confirm-password" class="col-sm-3 col-form-label">Confirm-password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="Confirm-password" name="Confirm-password" placeholder = "รหัสผ่านอีกครั้ง" required>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                    <input type="submit" name="submit" class="btn btn-info" value="Register">
                            </div>
                        </div>
                    </form>

                </div>
            </div>  
         </div> 
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
