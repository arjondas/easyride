<?php
	include("dbconnect.php");
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign In</title>
<link href="css/managersign.css" rel="stylesheet" type="text/css">
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
<br><br><br><br><br>
<p5>This is a manager sign-in site. If you are a user than return to homepage.</p5>
<div id="boxer">
<div id="logger">
	<p>ENTER YOUR CREDENTIALS</p>
	<form action="verifymanager.php" method="post">
		<input type="number" name="nid" placeholder="National ID"><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" value="Log In">
	</form>
	<?php 
		if($_SESSION["errormsg"]==1){
			?> <br><p1>Wrong email or password entered</p1><?php
		}
	?>
</div>

</div>
</body>
</html>

