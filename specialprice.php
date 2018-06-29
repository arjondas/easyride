<?php
	include("dbconnect.php");
	$sqli="select * from sp_price";
	$queryi=mysqli_query($dbconnect,$sqli);
	$sqli2="SELECT COUNT(s_price) as num FROM sp_price WHERE s_price > 0";
	$queryi2=mysqli_query($dbconnect,$sqli2);
	$rowi2=mysqli_fetch_assoc($queryi2);
	$price="";
	if($rowi2['num']>0){
		while($rowi=mysqli_fetch_assoc($queryi)){
			if($rowi['s_price']==0){
				continue;
			}else{
				$price="<tr><td>".$rowi['type']." : ".$rowi['s_price']." %</td></tr>".$price;
			}
		}
	}else{
		$price="<tr><td>No special offer</td></tr>";
	}

?>