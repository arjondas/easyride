<?php
	include("dbconnect.php");
	session_start();
	if(isset($_POST["sub"])){
		$sql3= "update car set bookedby=".$_SESSION["nid"].", availability = 'NO' where license_plate= '".$_SESSION["carid"]."'";
		$query3 = mysqli_query($dbconnect,$sql3);
	}
	header('location: dashboard.php');
?>