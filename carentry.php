<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Car Entry</title>
<?php 	
	session_start();
	?>
<script src="easyRide.js"></script>
<style>
	body{
		font-family: Helvetica," sans-serif";
		margin: 0;
	}
	table{
		border-collapse: collapse;
		width: 80%;
		margin-left: 20px;
	}
	tr,td,th{
		border: 2px solid black;
		height: 40px;
		padding: 0;
	}
	.insert{
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.3);
		border: none;
		text-align: center;
		font-size: 20px;
		color: white;
	}
	.insert:focus{
		background-color: rgba(0,0,0,0.6);
		outline: none;
	}
	.biscuit{
		border: none;
		box-shadow: 0 2px 16px 0 rgba(0,0,0,0.2);
		background-color: white;
		width: 100%;
		position: fixed;
		bottom: 10px;
		text-align: center;
		vertical-align: middle;
		font-size: 30px;
		font-weight: 300;
	}
	.entrycar{
		margin-left: 20px;
		width: 80%;
		font-size: 20px;
		border: none;
		background-color: rgba(0,0,6,0.6);
		color: lightgreen;
		height: 40px;
	}
	.entrycar:hover{
		background-color: rgba(0,3,6,0.8);
	}
	body{
		background-image: url(Images/carentry.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}
</style>
<script>
$(document).ready(function(){
	$(".biscuit").delay(3000);
	$(".biscuit").fadeOut(1000);
});
</script>
</head>

<body>
	<p style="margin-left: 20px;font-size: 40px">Enter New Car on Database</p>
	<form method="post" action="dbcarentry.php">
	<table>
		<tr>
			<th>License Plate</th>
			<th>Type</th>
			<th>Color</th>
			<th>Rate</th>
			<th>Fuel Economy</th>
		</tr>
		<tr>
			<td><input class="insert" type="text" name="lic_plt"></td>
			<td><input class="insert" type="text" name="type"></td>
			<td><input class="insert" type="text" name="color"></td>
			<td><input class="insert" type="number" name="rate"></td>
			<td><input class="insert" type="number" name="fuel"></td>
		</tr>
	</table>
	<br>
	<input type="submit" class="entrycar" name="sub" value="Enter car on Database">
	</form>
	<?php
		if($_SESSION['entsucc']==1){
			?>
				<div class="biscuit">Successfully Inserted Car in Database</div>
			<?php
			$_SESSION['entsucc']=0;
		}
	?>
</body>
</html>