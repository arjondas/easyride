<?php
	include("dbconnect.php");
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign In</title>
<link href="css/signin.css" rel="stylesheet" type="text/css">
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
	$(".success").delay(3000);
	$(".success").fadeOut(1000);
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

<div id="boxer">
<div id="logger">
	<p>ENTER YOUR CREDENTIALS</p>
	<form action="verifysignin.php" method="post">
		<input type="text" name="email" placeholder="Email"><br><br>
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
<?php
	if($_SESSION["success"]==1){
		?>	
<div class="success">
	<p2>SUCCESSFULLY SIGNED UP</p2></div><?php 
		$_SESSION["success"]=0;
	}
?>
</body>
</html>

