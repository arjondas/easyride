<?php
	include("dbconnect.php");
	session_start();
	$q= $_GET['q'];
	$sql="update customer set history = \"".$q."\" where NID= ".$_SESSION['slct_user'];
	$query = mysqli_query($dbconnect,$sql);
?>