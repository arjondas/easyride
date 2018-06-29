<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User Summary</title>
<?php
	include("dbconnect.php");
	$sql="select * from car where approval=\"YES\" order by date asc";
	$query= mysqli_query($dbconnect,$sql);
?>
<style>
	table{
		border-collapse: collapse;
		font-family: arial, sans-serif;
		letter-spacing: 1px;
		width: 90%;
	}
	th,td{
		border: 1px solid rgba(0,0,0,0.4);
		padding: 8px;
		text-align: center;
	}
	tr:nth-child(even){
		background-color: rgba(0,0,0,0.4);
	}
	
	body{
		background-image:url(Images/carentry.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>

</head>

<body>
<br>
<p style="font-family: arial, sans-serif; font-size: 150%;">Summary of customer activity:</p>
<table>
	<tr>
		<th>Date</th>
		<th>License Plate</th>
		<th>Type</th>
		<th>Customer ID</th>
		<th>Driver</th>
		<th>Hours</th>
		<th>Total</th>
	</tr>
		<?php
			while($row=mysqli_fetch_assoc($query)){
				echo "<tr><td>".$row['date']."</td>";
				echo "<td>".$row['license_plate']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td>".$row['bookedby']."</td>";
				echo "<td>".$row['dri_needed']."</td>";
				echo "<td>".$row['hours']."</td>";
				echo "<td>".$row['hours']*$row['special_price']."</td></tr>";
			}
		?>
</table>
</body>
</html>