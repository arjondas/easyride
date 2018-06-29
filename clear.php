<?php
	include("dbconnect.php");
	$clr = intval($_GET['q']);
	$sql = "update customer set not_1=NULL where NID=".$clr;
	$query = mysqli_query($dbconnect,$sql);
	echo "List cleared";
?>