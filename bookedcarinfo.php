<!DOCTYPE html>
<html>
<head>
<style>
.tab {
    width: 90%;
    border-collapse: collapse;
	border: 1px solid black;
	color: white;
	margin: 20px;
}

.tab {
    padding: 5px;
	color: white;
	background-color: rgba(0,0,0,0);
}

th {text-align: center;}
</style>
</head>
<body>
<?php
session_start();
$rec = $_GET["q"];
$_SESSION['lic_plt']= $rec;
include("dbconnect.php");
$sql2="SELECT * FROM car WHERE license_plate = '".$rec."'";
$result2 = mysqli_query($dbconnect,$sql2);

echo "<table class = 'tab'>
<tr>
<th>License Plate</th>
<th>Rate</th>
<th>Hours</th>
<th>Driver</th>
<th>Date</th>
</tr>";
while($row = mysqli_fetch_array($result2)) {
    echo "<tr>";
	if($row['approval']=="YES"){
		?>
		<td><p10 style="color: limegreen;font-size: 150%;">&#10004;&nbsp;</p10><?php echo $row['license_plate']; ?></td>
		<?php
	}else{
		?>
		<td><?php echo $row['license_plate']; ?></td>
		<?php
	}
    echo "<td>" . $row['special_price']." Tk." . "</td>";
    echo "<td>" . $row['hours'] . "</td>";
    echo "<td>" . $row['dri_needed'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>