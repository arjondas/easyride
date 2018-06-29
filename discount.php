<?php
	include("dbconnect.php");
	if($_POST['sedan']==NULL){
		$sedan=0;
	}else{
		$sedan=$_POST['sedan'];
	}
	if($_POST['suv']==NULL){
		$suv=0;
	}else{
		$suv=$_POST['suv'];
	}
	if($_POST['hiace']==NULL){
		$hiace=0;
	}else{
		$hiace=$_POST['hiace'];
	}
	if($_POST['mintr']==NULL){
		$mintr=0;
	}else{
		$mintr=$_POST['mintr'];
	}
	$sql1= "update car set special_price= (rate - (rate*".$sedan."/100)) where type = \"SEDAN\"";
	$query1= mysqli_query($dbconnect,$sql1);
	$sql2= "update car set special_price= (rate - (rate*".$suv."/100)) where type = \"SUV\"";
	$query2= mysqli_query($dbconnect,$sql2);
	$sql3= "update car set special_price= (rate - (rate*".$hiace."/100)) where type = \"HIACE\"";
	$query3= mysqli_query($dbconnect,$sql3);
	$sql4= "update car set special_price= (rate - (rate*".$mintr."/100)) where type = \"Mini-Truck\"";
	$query4= mysqli_query($dbconnect,$sql4);
	$sql1= "update sp_price set s_price= ".$sedan." where type = \"SEDAN\"";
	$sql2= "update sp_price set s_price= ".$suv." where type = \"SUV\"";
	$sql3= "update sp_price set s_price= ".$hiace." where type = \"HIACE\"";
	$sql4= "update sp_price set s_price= ".$mintr." where type = \"Mini-Truck\"";
	$query1= mysqli_query($dbconnect,$sql1);
	$query2= mysqli_query($dbconnect,$sql2);
	$query3= mysqli_query($dbconnect,$sql3);
	$query4= mysqli_query($dbconnect,$sql4);
	header('location: mgrdashboard.php');
?>