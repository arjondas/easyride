<?php
	include("dbconnect.php");
	session_start();
	$_SESSION['entsucc']=0;
	$sql = "select * from manager where managerid = \"".$_SESSION["mgrnid"]."\"";
	$query = mysqli_query($dbconnect,$sql);
	$result = mysqli_fetch_assoc($query);
	$sql11 = "select * from sp_price where type = \"SEDAN\"";
	$sql12 = "select * from sp_price where type = \"SUV\"";
	$sql13 = "select * from sp_price where type = \"HIACE\"";
	$sql14 = "select * from sp_price where type = \"Mini-Truck\"";
	$query11 = mysqli_query($dbconnect,$sql11);
	$query12 = mysqli_query($dbconnect,$sql12);
	$query13 = mysqli_query($dbconnect,$sql13);
	$query14 = mysqli_query($dbconnect,$sql14);
	$row11 = mysqli_fetch_assoc($query11);
	$row12 = mysqli_fetch_assoc($query12);
	$row13 = mysqli_fetch_assoc($query13);
	$row14 = mysqli_fetch_assoc($query14);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Manager Dashboard</title>
<link href="css/mgrdash.css" rel="stylesheet" type="text/css">
<style>
	#cout:hover {
		background-color: rgba(0,0,0,0.3);
	}	
	#sum:hover, #new:hover{
		background-color: rgba(0,0,0,0.3);
		padding-left: 30px;
		padding-right: 30px;
	}
	#sign{
		float: right;
		text-decoration: none;
		display: inline-block;
		color: white;
		padding: 15px;
		font-weight: 300;
		padding-left: 30px;
		padding-right: 30px;
	}
	#sign:hover{
		background-color: rgba(0,0,0,0.3);
	}
	#driver:hover{
		background-color: rgba(0,0,0,0.3);
	}
</style>
</head>
<body style="margin-left: 20px;">

<nav style="position: fixed; top: 0px;left: 0px;">
	<a id="sum" href="finalsummary.php" target="_blank" style="text-decoration: none; display: inline-block; color: white;padding: 15px;font-weight: 300;letter-spacing: 2px;">Summary</a>
	<a id="new" href="carentry.php" target="_blank" style="text-decoration: none; display: inherit-block; color: white;padding: 15px;font-weight: 300;letter-spacing: 2px;">New Car Entry</a>
	<a id="driver" href="driverlist.php" target="_blank" style="text-decoration: none; display: inline-block; color: white;padding: 15px;font-weight: 300;letter-spacing: 2px;">Driver List</a>
	<a id="sign" href="mgrsignout.php">Sign Out</a>
	<p>Signed in with NID: <?php echo $result["managerid"] ?>&nbsp;&nbsp;</p>
</nav>
<br><br><br><br>
<div style="padding: 20px; padding-right: 0px; float: right;width: 350px;background-color: rgba(0,0,0,0.4);border-radius: 10px;">
<form method="post" action="discount.php" ?>
<table>
	<tr><th colspan="2">Discount Panel</th><th>Discount</th></tr>
	<tr><td>SEDAN</td><td><input type="number" name="sedan" style="background-color: transparent;"></td><td style="color: greenyellow; text-shadow: 1px 1px 10px rgba(0,0,0,0.5);"><?php echo $row11['s_price']."%" ?></td></tr>
	<tr><td>SUV</td><td><input type="number" name="suv" style="background-color: transparent;"></td><td style="color:greenyellow;1px 1px 10px rgba(0,0,0,0.5);"><?php echo $row12['s_price']."%" ?></td></tr>
	<tr><td>HIACE</td><td><input type="number" name="hiace" style="background-color: transparent;"></td><td style="color: greenyellow;text-shadow: 1px 1px 10px rgba(0,0,0,0.5);"><?php echo $row13['s_price']."%" ?></td></tr>
	<tr><td>MINI-TRUCK</td><td><input type="number" name="mintr" style="background-color: transparent;"></td><td style="color: greenyellow;text-shadow: 1px 1px 10px rgba(0,0,0,0.5);"><?php echo $row14['s_price']."%" ?></td></tr>
</table>
	<input type="submit" name="submitdis" value="Submit" style="width: 326px;border: none;">
</form>
	</div>
	
<div class="search">
	Search by ID&nbsp;&nbsp;<input type="text" style="border-radius: 5px;background-color: rgba(0,0,0,0.3);border: none; outline: none;height: 25px;width: 275px;color: white;font-size: 100%;letter-spacing: 3px;text-align: center;" onKeyUp="myFunction(this.value);myFunction1(this.value);openNav();">
</div><br><br>
<p1>Pending booking request</p1><br><br>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<p1>Minimum num of Request</p1>
		<select class="filter" name="min">
			<option value = 1>1</option>
			<option value = 2>2</option>
			<option value = 3>3</option>
			<option value = 4>4</option>
			<option value = 5>5</option>
			<option value = 6>6</option>
			<option value = 20>More than 6</option>
		</select>
		<input class="sub" type="submit" name="submit" value="Submit">
	</form><br>
<?php
	$min = 1;
	if(isset($_POST["submit"])){
		$min = $_POST["min"];
	}
	$sql = "select bookedby, COUNT(license_plate) as num from car where availability=\"NO\" group by bookedby having COUNT(license_plate) >= ".$min;
	$query = mysqli_query($dbconnect,$sql);
	include("downnav.php");
?>

<table>
  	<tr>
    	<th>NID</th>
    	<th>No. of Request</th>
  	</tr>  	
<?php
	while($result= mysqli_fetch_assoc($query)){
		?>
  		<tr>
	  		<td><?php echo $result["bookedby"];?></td>
			<td id="cout" style="cursor:pointer" onclick="myFunction(<?php echo $result["bookedby"]; ?>); myFunction1(<?php echo $result["bookedby"];?>); openNav()"><?php echo $result["num"]; ?></td>
		</tr><?php $result++;
	}
?>
</table>

</body>
</html>