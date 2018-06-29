<!DOCTYPE html>
<html>
<head>
<style>
.tab {
    width: 90%;
    border-collapse: collapse;
	color: white;
	margin: 20px;
}

.tab {
    border: 1px solid rgba(0,0,0,0.5);
    padding: 5px;
	color: white;
	background-color: rgba(0,0,0,0);
}

th {text-align: center;}
	
#confirm1:hover{
	background-color: white;
	color: green;
}
	
#confirm2:hover{
	background-color: white;
	color: red;
}
</style>
</head>
<body>

<?php
session_start();
$q = intval($_GET['q']);
$_SESSION['slct_user']=$q;
include("dbconnect.php");
$sql2="SELECT * FROM car WHERE bookedby = '".$q."'";
$result2 = mysqli_query($dbconnect,$sql2);
echo "<table class = 'tab'>
<tr>
<th>License Plate</th>
<th>Type</th>
<th>Hours</th>
<th>Hourly Rate</th>
<th>Date</th>
<th>Amount</th>
<th>Driver Needed</th>
<th colspan=\"2\">Confirmation</th>
</tr>";
while($row = mysqli_fetch_array($result2)) {
    echo "<tr>";
    echo "<td>" . $row['license_plate'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['hours'] . "</td>";
    echo "<td>" . $row['special_price'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	echo "<td>" . $row['special_price']*$row['hours'] . "</td>";
    ?><td><?php echo $row['dri_needed'];?></td><?php 
		if($row['approval']=="YES"){
			?><td style="color: green;background-color: white;border: none;width: 100px">Approved</td><?php		
		}else{
			?><td id=confirm1 style="cursor: pointer; width: 100px;" onClick="yesFunction('<?php echo $row['license_plate'] ?>')">Approve</td><?php
		}
	?>
	<td id=confirm2 style="width: 100px" onClick="no('<?php echo $row['license_plate'];?>')">Remove</td>
	<?php
	$row++;
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>