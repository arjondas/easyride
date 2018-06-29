<?php
	include("dbconnect.php");
	$sql2="select not_1 from customer where NID =10001";
	$query2=mysqli_query($dbconnect,$sql2);
	$row2= mysqli_fetch_assoc($query2);
?>
<body>
<table style="border: 2px solid black; border-collapse: collapse;">
<tr>
	<th>Reject</th>
</tr>
	<tr><td>Arjon</td></tr>
	<tr><td>Gourav</td></tr>
</table>
</body>