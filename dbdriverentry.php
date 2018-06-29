<?php
	include("dbconnect.php");
	if($_POST['nid']>0){
		$sql= "insert into drivers(driver_nid,license) values(".$_POST['nid'].",".$_POST['lic'].")";
		$query = mysqli_query($dbconnect,$sql);
		header('location: driverlist.php');
	}
?>