<?php
	include("dbconnect.php");
	session_start();
	$q= $_GET['q'];
	$sql= "update customer set not_2=\"".$q."\" where NID = ".$_SESSION['slct_user'];
	$query = mysqli_query($dbconnect,$sql);
	
	$sql= "select * from customer where NID = ".$_SESSION['slct_user'];
	$query = mysqli_query($dbconnect,$sql);
	$row= mysqli_fetch_assoc($query);
	echo $row['not_2'];
?>