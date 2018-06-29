<?php 
	session_start();
	include("dbconnect.php");
	$hour = intval($_GET["q"]);
	$sql = "update car set hours= ".$hour." where license_plate= \"".$_SESSION['lic_plt']."\"";
	$query =mysqli_query($dbconnect,$sql);
	echo "Hours successfully inserted";
?>