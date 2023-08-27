<?php
session_start();

require_once('connect.php');

  $Total = 0;
  $SumTotal = 0;

  $sql ="INSERT INTO `order` (`name`, `lastname`, `email`, `phone`, `address`, `province`, `district`, `subdistrict`, `zipcode`, `date`, `update`)
                       VALUES ('".$_POST['name']."', '".$_POST['lastname']."', '".$_POST['email']."', 
                     '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['province']."', '".$_POST['district']."', 
                     '".$_POST['subdistrict']."', '".$_POST['zipcode']."', 
                     '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."');";
  $result = $conn->query($sql) or die($conn->error);
  $strid = mysqli_insert_id($conn);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strid"][$i] != "")
	  {
			  $str = "INSERT INTO `order_detail` (`product_id`, `order_id`, `qty`, `price`, `name`, `lastname`, `date`, `update`)
				VALUES
				('".$_SESSION["strid"][$i]."', '".$strid."','".$_SESSION["strqty"][$i]."', '".$_POST['price'][$i]."', '".$_POST['name']."', '".$_POST['lastname']."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."') 
			  ";
  $result = $conn->query($str) or die($conn->error);
	  }
  }

header("location:finish.php?id=".$strid);
?>