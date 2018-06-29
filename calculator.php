<?php 
	session_start();
	include("dbconnect.php");
	$lic = $_GET["q"];
	$sql = "select * from car where license_plate = \"".$lic."\"";
	$query =mysqli_query($dbconnect,$sql);
	$row = mysqli_fetch_assoc($query);
	if($row['hours']==NULL and ($row['dri_needed']==NULL or $row['dri_needed']=='NO')){
		echo "";
	}elseif($row['dri_needed']==NULL or $row['dri_needed']=='NO'){
		?><p10 style="color:white; font-size:40%;">Amount:&nbsp;&nbsp;</p10> <?php echo $row['special_price']*$row['hours']; ?><p10 style="color:white; font-size:40%;"> Tk.</p10> <?php
	}else{
		?><p10 style="color:white; font-size:40%;">Amount:&nbsp;&nbsp;</p10> <?php echo $row['hours']*($row['special_price']+200); ?><p10 style="color:white; font-size:40%;"> Tk.</p10><br><p10 style="color: white; font-size: 20%;float:right;">Including driver salary</p10> <?php
	}
?>