<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
<title>Login</title>
<?php
if(@$_GET['page'] == 'login');
require_once('inc/header.php');
?>
<body background="image/bg.jpg">

        <?php
        include_once('connect.php');  
        if(isset($_POST['submit']))    {
            $username = $conn->real_escape_string ($_POST['username']);
            $password = $conn->real_escape_string ($_POST['password']);


            $sql = "SELECT * FROM `member` WHERE `username` = '".$username."' AND `password` = '".$password."'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['last_name'] = $row['lastname'];
                $_SESSION['image'] = $row['image'];
                header("location:index.php");

            }else{
                echo "<script>alert('Username or Password is invalid');window.location='index.php'</script>";
            }
        }

        ?>


   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto mt-5">
               <div class="card">
                    <form action="" method="post" >
                   <div class="card-header text-center">
                       Log in to Your Account!!!
                   </div>
                        <div class="card-body ">
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username" placeholder = "ยูสเซอร์ของผู้ใช้งาน">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder = "รหัสผ่าน">
                            </div>
                            </div>
                                <div class="card-footer text-center">
                                    <input type="submit" name="submit" class="btn btn-success" value="Login">
               </div>
           </div>
           </form>
       </div>
   </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

</body>
</html>
