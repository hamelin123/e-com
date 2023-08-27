<?php
session_start();
if(!isset($_SESSION["intLine"]))
{

	 $_SESSION["intLine"] = 0;
	 $_SESSION["strid"][0] = $_GET["id"];
	 $_SESSION["strqty"][0] = 1;

	 header("location:cart.php");
}
else
{
	
	$key = array_search($_GET["id"], $_SESSION["strid"]);
	if((string)$key != "")
	{
		 $_SESSION["strqty"][$key] = $_SESSION["strqty"][$key] + 1;
	}
	else
	{
		
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strid"][$intNewLine] = $_GET["id"];
		 $_SESSION["strqty"][$intNewLine] = 1;
	}
	
	 header("location:cart.php");

}
?>