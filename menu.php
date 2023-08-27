<?php session_start();?>
<?php
      require_once('connect.php');
      $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
      $sql = "SELECT * FROM `article` WHERE `tag` LIKE '%".$tag."%'";
      $result = $conn->query($sql);
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bakery</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
		</head>
		<body>	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
					      	<div class="menu-social-icons">
								<a href="https://www.facebook.com/diwkts3"><i class="fa fa-facebook"></i></a>
							</div>	    				  					
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" href="tel:0928935403">0928935403</a>
				  				<a class="btns" href="mailto:kittisak.cha@sbac.ac.th">kittisak.cha@sbac.ac.th</a>		
				  				<a class="icons" href="tel:0928935403">
				  					<span class="lnr lnr-phone-handset"></span>
				  				</a>
				  				<a class="icons" href="mailto:kittisak.cha@sbac.ac.th">
				  					<span class="lnr lnr-envelope"></span>
				  				</a>		
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>		
						<nav class="navbar-nav mr-auto">
							<ul class="nav-menu">
								<li class="menu-active">
									<a href="index.php">Home <span class="sr-only"></span></a>
								  </li>
								  <li class="menu-active">
									<a href="menu.php">Menu <span class="sr-only"></span></a>
								  </li>
								  <li class="menu-active">
									<a href="contact.php">Contact <span class="sr-only"></span></a>
								  </li>			              
							    </ul>
							  </li>
							</ul>
                        </nav><!-- #nav-menu-container -->		
                        <!--Start Right Bar -->
                        <nav class="navbar-nav ml-auto">
    <ul class="nav-menu">
    <?php if (isset($_SESSION['id'])) { ?>
    <li class="menu-active">
        <a>
    User: <?php echo $_SESSION['username']?> </a>
									<a class="dropdown-item" href="logout.php">Logout</a>
                                  </li>
                                  <?php }else {?>
                                  <li class="menu-active">
									<a class="dropdown-item" href="login.php">Login</a>
                                  </li>
                                  <li class="menu-active">
									<a class="dropdown-item" href="register.php">Register</a>
                                  </li>
                                  <?php }?>
</nav>
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
							<h6 class="text-uppercase">Welcome To</h6>
							<h1>
								Balloon Bakery			
							</h1>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

            <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="shop.php?tag=all">
                        <button class="btn btn-warning <?php echo $tag == 'all' ? 'active': '' ?> ">ทั้งหมด</button>
                    </a>
                    <a href="shop.php?tag=เค้ก">
                        <button class="btn btn-warning <?php echo $tag == 'เค้ก' ? 'active': '' ?>">เค้ก</button>
                    </a>
                    <a href="shop.php?tag=ขนมปัง">
                        <button class="btn btn-warning <?php echo $tag == 'ขนมปัง' ? 'active': '' ?>">ขนมปัง</button>
                    </a>
                    <a href="shop.php?tag=คุกกี้">
                        <button class="btn btn-warning <?php echo $tag == 'คุกกี้' ? 'active': '' ?>">คุกกี้</button>
                    </a>
                    <a href="shop.php?tag=เครปเย็น">
                        <button class="btn btn-warning <?php echo $tag == 'เครปเย็น' ? 'active': '' ?>">เครปเย็น</button>
                    </a>เค้ก
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
			<!-- End item-category Area -->				
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that.
								</p>							
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="" type="email">
			                            	<button class="click-btn"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>	
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>								
						</div>						
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>			
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="js/jquery.min.js"></script>
			<script src="js/smoothscroll.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="js/popper.min.js"></script>
		</body>
	</html>