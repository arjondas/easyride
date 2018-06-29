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
</nav><br><br><br><br><br>
<p4>This is a manager recruit site. If you are a user than return to homepage.To apply for manager post please fill up the following form and submit the application.After consideration you will be contacted througn the given mobile number or email.</p4>
<div class="opac">
	<div class="padder1">
		<p>Please Fill up all the entries</p>
	  <form action="req_dbentry.php" method="post">
			<input type="text" name="f_name" placeholder="First Name"><br><br>
			<input type="text" name="l_name" placeholder="Last Name"><br><br>
			<input type="number" name="nid" placeholder="National ID"><br><br>
			<input type="text" name="email" placeholder="Email"><br><br>
			<input type="text" name="cont" placeholder="Mobile No."><br><br>
			<input type="text" name="edu" placeholder="Educational Qualification"><br><br>
			<input type="submit" value="Submit Application"><br><br>
		</form>
		<?php 
		session_start();
		if($_SESSION["errorsign"]==1){
		?><p1>Already applied for manager post with the given NID or Email<br></p1><?php
			}
		if($_SESSION["errormsg"]==1){
		?><p1>Invalid information</p1><?php
		}
		?>
  </div>
</div>
<?php
	if($_SESSION["success"]==1){
		?>	
<div class="success">
	<p3>SUCCESSFULLY SUBMITTED APPLICATION</p3></div><?php 
		$_SESSION["success"]=0;
	}
?>
</body>
</html>