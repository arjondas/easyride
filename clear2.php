<?php
	include("dbconnect.php");
	$clr= intval($_GET[q]);
	$sql= "update customer set not_2=NULL where NID =".$clr;
	$query= mysqli_query($dbconnect,$sql);
	echo "Noticeboard cleared";
?>