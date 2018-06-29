<?php 
	session_start();
	include("dbconnect.php");
	$date = $_GET["q"];
	$sql = "update car set date= \"".$date."\" where license_plate= \"".$_SESSION['lic_plt']."\"";
	$query =mysqli_query($dbconnect,$sql);
	echo "Receive date entered successfully";
?>