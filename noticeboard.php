<?php 
	include("dbconnect.php");
	$sql1="select * from customer where NID =".$_SESSION['nid'];
	$query1=mysqli_query($dbconnect,$sql1);
	$row1= mysqli_fetch_assoc($query1);
	$not="";
	if($row1['not_2']==NULL){
		$not="<tr><td>EMPTY</td></tr>";
	}else{
		$not="<tr><td>".$row1['not_2']."</td></tr>";
	}
?>