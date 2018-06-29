<?php
	include("dashprocess.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>DASHBOARD</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="dashboardstyle.css" rel="stylesheet" type="text/css">
<script src="easyRide.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(function(){
        $(".dropdown-content").fadeIn(500);
    });
	$(".dropdown").mouseleave(function(){
        $(".dropdown-content").fadeOut(500);
    });
	$(".explore").hover(function(){
        $(".expContent").fadeIn(500);
    });
	$(".explore").mouseleave(function(){
        $(".expContent").fadeOut(500);
    });
	$(".manager").hover(function(){
        $(".mgrcontent").fadeIn(500);
    });
	$(".manager").mouseleave(function(){
        $(".mgrcontent").fadeOut(500);
    });
});
</script>
</head>
<body>
<div class="background"></div>
<nav class="navSignIn">
	<div class="dropdown">
  		<button class="dropbtn"><?php echo $user_name ?></button>
		<div class="dropdown-content">
    		<a href=<?php echo $link1 ?>><?php echo $text1 ?></a>
    		<a href=<?php echo $link2 ?>><?php echo $text2 ?></a>
  		</div>
	</div>
</nav>

<nav class="navExp">
	<div class="explore">
		<button class="explorebtn">EXPLORE</button>
		<div class="expContent">
			<a href="index.php">HOME</a>
			<a href="bookacar.php">BOOK</a>
			<a href="calculatefare.php">CALCULATE FARE</a>
			<a href="features.php">FEATURES</a>
			<a href="#">YOUR LOCATION</a>
			<a href="contact.php">CONTACT</a>
			<a href="#">SPECIAL LINK</a>
			<a href="#">REPORT</a>
		</div>
  </div>
</nav>
<br><br>
<?php 
	include("usernav.php");
	include("rightnav.php");
?>
<div class="searchoption" style="text-align: center">
	<br><p1><?php echo "You have ".$count." booked cars";?></p1><br><br>
	<table style="margin-left: auto;margin-right: auto;">
	<?php if($count!=0){ ?>
	<tr>
		<th>License Plate</th>
		<th>Type</th>
		<th>Color</th>
		<th>Fuel Economy</th>
		<th>Rate</th>
	</tr><?php
			while($row = mysqli_fetch_assoc($query)){ 
				?>
				<tr>
				<td class="hov" style="cursor:pointer" onClick="myFunction('<?php echo $row["license_plate"]; ?>');calculate('<?php echo $row["license_plate"]; ?>'); openNav()"><?php echo $row["license_plate"] ?></td>
				<td><?php echo $row["type"] ?></td>
				<td><?php echo $row["color"] ?></td>
				<td><?php echo $row["fuel_economy"] ?></td>
				<td><?php echo $row["special_price"] ?></td>
				</tr>
				<?php
			}
		}
	?>
	</table>
	<div class="notification">
		<button id="notify" onMouseOver="openNav2()">&lang;&lang;</button>
	</div>
<br>
	<p1>Search cars to request for booking</p1><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Enter Type:
  <select id="search" name="type">
    <option value="Sedan">SEDAN</option>
    <option value="SUV">SUV</option>
    <option value="Hiace">HIACE</option>
    <option value="Mini-Truck">MINI-TRUCK</option>
  </select>
  <br>
  Enter Price from:
  <select id="search" name="from">
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
  &emsp;to:
  <select id="search" name="to">
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
  <input class="sub1" type="submit" name="submit" value="Submit">
</form>
</div>
<div class="full_line">
<?php
if(isset($_POST["submit"])){
	$sql2 = "select * from car where type = \"".$_POST["type"]."\"and availability =\"YES\" and rate between ".$_POST["from"]." and ".$_POST["to"];
	$query2 = mysqli_query($dbconnect,$sql2);
	$count2 = mysqli_num_rows($query2);
	if($count2!=0){
		?> <p><?php echo "Search results for Type: \"".$_POST["type"]."\" of price range from ".$_POST["from"]." to ".$_POST["to"]."<br>";?></p> <?php
		while($result2 = mysqli_fetch_assoc($query2)){
			?><form method="post" action="dashbooking.php">
			<div class="box"><?php echo "License no: " . $result2["license_plate"]; ?></div><?php
			?><div class="box"><?php echo "Type: " . $result2["type"];?></div><?php
			?><div class="box"><?php echo "Color: " . $result2["color"];?></div><?php
			?><div class="box"><?php echo "Rate per hour: " . $result2["special_price"];?></div><?php
			?><div class="box"><?php echo "Fuel Economy: " . $result2["fuel_economy"];?></div><?php
			?><div class="box"><?php echo "Availability: " . $result2["availability"];?></div>&nbsp;
			<input type="hidden" name="carid" value="<?php echo $result2["license_plate"];$result2++; ?>">
			<input class="sub2" type="submit" name="carsub" value="Request Booking"><br>
			</form><?php
		}
	}else{
		?><p><?php echo "0 Search results"; ?></p><?php
	}
}
	?>	
</div>
</body>
</html>