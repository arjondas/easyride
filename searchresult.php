<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Search results</title>
</head>

<body>
<?php
	include("dbconnect.php");
	echo "Search results for Type: \"".$_POST["type"]."\" of price range from ".$_POST["rate1"]." to ".$_POST["rate2"];
	$sql = "select * from car where type = \"".$_POST["type"]."\" and rate between ".$_POST["rate1"]." and ".$_POST["rate2"];
	$query = mysqli_query($dbconnect,$sql);
	$result = mysqli_fetch_assoc($query);
?>
<p>
	<?php
		do{
			echo "License no: " . $result["license_plate"] . " Type: " . $result["type"] . " Color: " . $result["color"] . " Rate per hour: " . $result["rate"] . " Fuel Economy: " . $result["fuel_economy"] . " Availability: " . $result["availability"] . "<br>";
		}while($result = mysqli_fetch_assoc($query));
	?>
</p>
</body>
</html>