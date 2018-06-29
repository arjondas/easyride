<?php
	include("dbconnect.php");
	session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Verifying</title>
</head>

<body>
<?php
	$sql = "select * from customer where email = \"".$_POST["email"]."\"";
	$query = mysqli_query($dbconnect,$sql);
	$result = mysqli_fetch_assoc($query);
	$count = mysqli_num_rows($query);
	if($count==1 && $result["password"]==$_POST["password"]){
		$_SESSION["user"]=$result["F_Name"];
		$_SESSION["nid"]=$result["NID"];
		header('location: index.php');
	}else{
		header('location: signin.php');
		$_SESSION["errormsg"]=1;
	}
?>
</body>
</html>