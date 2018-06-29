<?php
	session_start();
	if($_SESSION['user']==""){
		header('location: signin.php');
	}else{
		header('location: dashboard.php');
	}
?>