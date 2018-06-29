<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<link href="css/signup.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="easyRide.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(function(){
        $(".dropdown-content").fadeIn(500);
    });
	$(".dropdown").mouseleave(function(){
        $(".dropdown-content").fadeOut(500);
    });
	$(".explore").hover(function(){
        $(".expContent").fadeIn(500);
    });
	$(".explore").mouseleave(function(){
        $(".expContent").fadeOut(500);
    });
	$(".manager").hover(function(){
        $(".mgrcontent").fadeIn(500);
    });
	$(".manager").mouseleave(function(){
        $(".mgrcontent").fadeOut(500);
    });
	
});
	</script>
</head>

<body>
<nav class="navExp">
	<div class="explore">
		<button class="explorebtn">EXPLORE</button>
		<div class="expContent">
			<a href="index.php">HOME</a>
			<a href="bookacar.php">BOOK</a>
			<a href="calculatefare.php">CALCULATE FARE</a>
			<a href="features.php">FEATURES</a>
			<a href="#">YOUR LOCATION</a>
			<a href="contact.php">CONTACT</a>
			<a href="#">SPECIAL LINK</a>
			<a href="#">REPORT</a>
		</div>
  </div>
</nav>
<nav class="navMgr">
	<div class="manager">
		<button class="mgrLink">MANAGER</button>
		<div class="mgrcontent">
			<a href="managersignin.php">MANAGER SIGN IN</a>
			<a href="managersignup.php">REQUEST SIGN UP</a>
		</div>
  </div>
</nav>
<div class="opac">
	<div class="padder">
		<p>Please Fill up all the entries</p>
		<form action="dbentry.php" method="post">
			<input type="text" name="f_name" placeholder="First Name"><br><br>
			<input type="text" name="l_name" placeholder="Last Name"><br><br>
			<input type="number" name="nid" placeholder="National ID"><br><br>
			<input type="text" name="email" placeholder="Email"><br><br>
			<input type="password" name="pass" placeholder="Password"><br><br>
			<input type="password" name="verpass" placeholder="Verify Password"><br><br>
			<input type="text" name="cont" placeholder="Mobile No."><br><br>
			<input type="submit" value="Sign Up"><br><br>
		</form>
		<?php 
		session_start();
		if($_SESSION["errorverpass"]==1){
		?><p1>Password didn't match<br></p1><?php
			}
		if($_SESSION["errorsign"]==1){
		?><p1>Already registered with the given NID or Email<br></p1><?php
			}
		if($_SESSION["errormsg"]==1){
		?><p1>Invalid information</p1><?php
		}
		?>
	</div>
</div>
</body>
</html>