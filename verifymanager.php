<?php
	include("dbconnect.php");
	session_start()
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Verifying</title>
</head>

<body>
<?php
	$sql = "select * from manager where managerid = \"".$_POST["nid"]."\"";
	$query = mysqli_query($dbconnect,$sql);
	$result = mysqli_fetch_assoc($query);
	$count = mysqli_num_rows($query);
	if($count==1 && $result["password"]==$_POST["password"]){
		$_SESSION["mgrnid"]=$result["managerid"];
		header('location: mgrdashboard.php');
	}else{
		$_SESSION["errormsg"]=1;
		header('location: managersignin.php');
	}
?>
</body>
</html>