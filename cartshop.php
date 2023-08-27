<?php
	require_once 'connect.php';
	$username = username();
	$id = $_REQUEST['id'];
	$price = $_REQUEST['price'];
	$query = $db -> query("SELECT id FROM article WHERE id='".$id."'");
	if ($query -> num_rows < 1)
		die("<script>alert('ไม่มีสินค้านี้')</script>");
	$result = $query -> fetch_array()[0];
	$checkOutSQL = "INSERT INTO order_detail (id, produce_id, order_id, Amount) VALUES ('$id','$product','$order','$amount')";
	$db -> query($checkOutSQL);
	if (mysqli_affected_rows($db) > 0)
		die("<script>alert('เพิ่มสินค้าลงในตระกร้าแล้ว');window.location='shop.php'</script>");
	die(alertAndSendBack('เกิดข้อผิดพลาดขณะพิ่มสินค้าลงในตระกร้า'));