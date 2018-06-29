<?php
	include("dbconnect.php");
	session_start();
	if($_POST['lic_plt']!=""){
		$sql="insert into car(license_plate,type,color,rate,fuel_economy,availability,special_price) values(\"".$_POST['lic_plt']."\",\"".$_POST['type']."\",\"".$_POST['color']."\",\"".$_POST['rate']."\",\"".$_POST['fuel']."\",\"YES\",\"".$_POST['rate']."\")";
		mysqli_query($dbconnect,$sql);
		$_SESSION['entsucc']=1;
		header('location: carentry.php');
	}else{
		header('location: carentry.php');
	}
?>