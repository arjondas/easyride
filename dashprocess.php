<?php
	include("dbconnect.php");
	session_start();
	$_SESSION["errormsg"]=0;
	$_SESSION["errorsign"]=0;
	$_SESSION["errorverpass"]=0;
	$_SESSION["success"]=0;
	if(isset($_SESSION["user"])==""){
		$user_name = "ACCOUNT";
	}
	else{
		$user_name = $_SESSION["user"];
	}
	if($user_name=="ACCOUNT"){
		$link1="signin.php";
		$link2="signup.php";
		$text1="SIGN IN";
		$text2="SIGN UP";
	}else{
		$link1="#";
		$link2="signout.php";
		$text1= "NID: ".$_SESSION["nid"];
		$text2="SIGN OUT";
	}
	$sql = "select * from car where bookedby = ".$_SESSION["nid"];
	$query = mysqli_query($dbconnect,$sql);
	$count = mysqli_num_rows($query);
?>

