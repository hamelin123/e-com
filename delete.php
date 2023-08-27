<?php
	session_start();

	$Line = $_GET["Line"];
	$_SESSION["strid"][$Line] = "";
	$_SESSION["strQty"][$Line] = "";

	header("location:cart.php");
?>