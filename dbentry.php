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
	$sql1 = "select * from customer where NID = ".$_POST["nid"]." or email = \"".$_POST["email"]."\"";
	$query1 = mysqli_query($dbconnect,$sql1);
	$count = mysqli_num_rows($query1);
	$_SESSION["errorsign"]=0;
	$_SESSION["errorverpass"]=0;
	$_SESSION["errormsg"]=0;
	if($_POST["pass"]!=$_POST["verpass"]){
		$_SESSION["errorverpass"]=1;
		header('location: signup.php');
	}elseif($_POST["nid"]==0 or $_POST["f_name"]=="" or $_POST["l_name"]=="" or $_POST["cont"]=="" or $_POST["email"]==""){
		$_SESSION["errormsg"]=1;
		header('location: signup.php');
	}elseif($count==0){
		$sql = "insert into customer(NID,F_Name,L_Name,Contact,email,password) values(\"".$_POST["nid"]."\",\"".$_POST["f_name"]."\",\"".$_POST["l_name"]."\",\"".$_POST["cont"]."\",\"".$_POST["email"]."\",\"".$_POST["pass"]."\")";
		$query = mysqli_query($dbconnect,$sql);
		header('location: signin.php');
		$_SESSION["success"]=1;
	}else{
		$_SESSION["errorsign"]=1;
		header('location: signup.php');
	}
?>
</body>