<?php
	include("dbconnect.php");
	$token = $_GET[q];
	$sql="update car set approval = \"YES\" where license_plate= \"".$token."\"";
	$query= mysqli_query($dbconnect,$sql);
?>


