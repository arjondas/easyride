<?php 
	include("dbconnect.php");	
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Book a Car</title>
</head>

<body>
<p><?php
	echo "Hello world! I don't like dreamweaver";
	$sql = "select * from car";
	$query = mysqli_query($dbconnect,$sql);
	$result = mysqli_fetch_assoc($query);
	?>
	</p>
	
	<form action="searchresult.php" method="post">
		Car Type:          <select name="type">
			<option value="SUV">SUV</option>
			<option value="Sedan">Sedan</option>
			<option value="Mini-Truck">Mini-Truck</option>
		</select>
		Price Range from:  
		<select id="search" name="rate1">
    <option value= 100>Less than 300</option>
    <option value= 300>300</option>
    <option value= 400>400</option>
    <option value= 500>500</option>
    <option value= 600>600</option>
    <option value= 700>700</option>
    <option value= 800>800</option>
    <option value= 900>900</option>
    <option value= 1000>1000</option>
    <option value= 1100>1100</option>
    <option value= 1200>1200</option>
    <option value= 1300>1300</option>
  </select>
		 to: 
		 <select id="search" name="rate2">
    <option value= 300>300</option>
    <option value= 400>400</option>
    <option value= 500>500</option>
    <option value= 600>600</option>
    <option value= 700>700</option>
    <option value= 800>800</option>
    <option value= 900>900</option>
    <option value= 1000>1000</option>
    <option value= 1100>1100</option>
    <option value= 1200>1200</option>
    <option value= 1300>1300</option>
    <option value= 2000>More than 1300</option>
  </select>
		<input type="submit">
	</form>
	
	<p>
	<?php
		do{
			echo "License no: " . $result["license_plate"] . " Type: " . $result["type"] . " Color: " . $result["color"] . " Rate per hour: " . $result["rate"] . " Fuel Economy: " . $result["fuel_economy"] . " Availability: " . $result["availability"] . "<br>";
		}while($result = mysqli_fetch_assoc($query));
	?></p>
</body>
</html>