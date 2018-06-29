<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculate Fare</title>
<?php
	include("dbconnect.php");
	$sql= "select * from car where availability=\"YES\" and type=\"".$_POST['type']."\" order by special_price asc";
	$query = mysqli_query($dbconnect,$sql);
	if($_POST['dri']==200){
		$dri="YES";
	}else{
		$dri="NO";
	}
?>
<style>
	body{
		font-family: Helvetica Neue, Helvetica, Arial," sans-serif";
		margin: 40px;
	}
	table{
		text-align: center;
		border-collapse: collapse;
		width: 70%;
	}
	
	tr,td,th{
		border: 1px solid black;
		height: 30px;
	}
	tr:nth-child(even){
		background-color: rgba(0,0,0,0.4);
	}	
</style>

</head>
<body>
	<p style="font-size: 20px;">Results according to given options:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="calculatefare.php" style="display: inline-block;text-decoration: none;height: 25px;width: 70px;background-color: rgba(0,0,0,0.4);text-align: center;color: black;">Back</a></p>
	<table>
		<tr>
			<th>License Plate</th>
			<th>Type</th>
			<th>Fuel Economy</th>
			<th>Rate</th>
			<th>Hours</th>
			<th>Driver Needed</th>
			<th>Amount</th>
		</tr>
		<?php
			while($row=mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row['license_plate'] ?></td>
						<td><?php echo $row['type'] ?></td>
						<td><?php echo $row['fuel_economy'] ?></td>
						<td><?php echo $row['special_price'] ?></td>
						<td><?php echo $_POST['hour'] ?></td>
						<td><?php echo $dri ?></td>
						<td><?php echo ($row['special_price']+$_POST['dri'])*$_POST['hour'] ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>


