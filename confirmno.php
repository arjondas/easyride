<?php
	include("dbconnect.php");
	$token = $_GET[q];
	$sql1="select bookedby from car where license_plate=\"".$token."\"";
	$query1=mysqli_query($dbconnect,$sql1);
	$row = mysqli_fetch_assoc($query1);
	$user = $row['bookedby'];
	
	$sql="update car set approval = NULL, bookedby = NULL, hours = NULL, date = NULL, dri_needed = NULL, availability= \"YES\" where license_plate= \"".$token."\"";
	$query= mysqli_query($dbconnect,$sql);
	
	$sql2="select not_1 from customer where NID =".$user;
	$query2=mysqli_query($dbconnect,$sql2);
	$row2= mysqli_fetch_assoc($query2);
	if($row2['not_1']==NULL){
		$note = "";
		$note = "<tr><td>".$token."</td></tr>".$note;
	}else{
		$note = $row2['not_1'];
		$note = "<tr><td>".$token."</td></tr>".$note;
	}
	

	$sql3="update customer set not_1=\"".$note."\" where NID=".$user;
	$query3=mysqli_query($dbconnect,$sql3);
?>