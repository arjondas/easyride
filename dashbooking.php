<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include("dbconnect.php");
	session_start();
	$sql3= "update car set bookedby=".$_SESSION["nid"]." , availability = 'NO' where license_plate= \"".$_POST["carid"]."\"";
	$query3 = mysqli_query($dbconnect,$sql3);
	header('location: dashboard.php');
?>
</body>
</html>