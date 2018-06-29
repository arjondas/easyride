<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>
</body>
<?php
$q = intval($_GET['q']);
include("dbconnect.php");
$sql2="SELECT * FROM customer WHERE NID = '".$q."'";
$result2 = mysqli_query($dbconnect,$sql2);
$row = mysqli_fetch_assoc($result2);
echo "Name: ".$row["F_Name"]." ".$row["L_Name"]."&nbsp;&nbsp;&nbsp;&nbsp;";
if($row["history"]==NULL){
	echo "No previous record";
}else echo "History : ".$row["history"];
?>
</html>