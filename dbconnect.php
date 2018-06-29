<?php
	$dbconnect = mysqli_connect("localhost","root","","easyridedb");
	if(mysqli_connect_errno()){
		echo "Connection failed: ".mysqli_connect_error();
		exit;
	}
?>