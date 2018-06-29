<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Driver List</title>
<?php
	include("dbconnect.php");
	$sql="select * from drivers";
	$query= mysqli_query($dbconnect,$sql);
?>
<style>
	table{
		border-collapse: collapse;
		width: 40%;
		text-align: center;
	}
	th,tr,td{
		border: 1px solid black;
		padding: 5px;
	}
	body{
		font-family: Helvetica Neue, Helvetica, Arial," sans-serif";
		font-size: 100%;
		background-image: url(Images/mgr1.jpg);
	}
	</style>
</head>

<body>
<form method="post" action="dbdriverentry.php">
	Insert Driver Information<br><br>
	DRIVERS NID:&nbsp;<input type="number" name="nid">&nbsp;&nbsp;&nbsp;&nbsp;
	DRIVERS LICENSE NO:&nbsp;<input type="number" name="lic">
	<input type="submit" value="Insert"> 
</form>
<br><br>
<p style="font-family: arial, sans-serif; font-size: 150%;">Summary of customer activity:</p>
<table>
	<tr>
		<th>DRIVER NID</th>
		<th>LICENSE NUMBER</th>
	</tr>
		<?php
			while($row=mysqli_fetch_assoc($query)){
				echo "<tr><td>".$row['driver_nid']."</td>";
				echo "<td>".$row['license']."</td></tr>";
			}
		?>
</table>
</body>
</html>