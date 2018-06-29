<?php 
	session_start();
	include("dbconnect.php");
	$drive = $_GET["q"];
	$sql = "update car set dri_needed= \"".$drive."\" where license_plate= \"".$_SESSION['lic_plt']."\"";
	$query =mysqli_query($dbconnect,$sql);
	if($drive=="YES"){ echo "Driver request sent. You have to pay the driver additional 200 Tk per hour.";}
	elseif($drive=="NO"){ echo "No Driver will be assigned";}
?>