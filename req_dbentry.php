<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Data entry</title>
</head>

<body>
<?php
	include("dbconnect.php");
	session_start();
	$sql1 = "select * from mgrecruit where NID = ".$_POST["nid"]." or email = \"".$_POST["email"]."\"";
	$query1 = mysqli_query($dbconnect,$sql1);
	$count = mysqli_num_rows($query1);
	$_SESSION["errorsign"]=0;
	$_SESSION["errormsg"]=0;
	if($_POST["nid"]==0 or $_POST["f_name"]=="" or $_POST["l_name"]=="" or $_POST["cont"]=="" or $_POST["email"]=="" or $_POST["edu"]==""){
		$_SESSION["errormsg"]=1;
		header('location: managersignup.php');
	}elseif($count==0){
		$sql = "insert into mgrecruit(NID,f_Name,l_Name,email,contact,edu_qualification) values(\"".$_POST["nid"]."\",\"".$_POST["f_name"]."\",\"".$_POST["l_name"]."\",\"".$_POST["email"]."\",\"".$_POST["cont"]."\",\"".$_POST["edu"]."\")";
		$query = mysqli_query($dbconnect,$sql);
		header('location: managersignup.php');
		$_SESSION["success"]=1;
	}else{
		$_SESSION["errorsign"]=1;
		header('location: managersignup.php');
	}
?>
</body>