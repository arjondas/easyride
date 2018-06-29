<?php
	include("dbconnect.php");
	session_start();
	$_SESSION["errormsg"]=0;
	$_SESSION["errorsign"]=0;
	$_SESSION["errorverpass"]=0;
	$_SESSION["success"]=0;
	if(isset($_SESSION["user"])==""){
		$user_name = "ACCOUNT";
	}
	else{
		$user_name = $_SESSION["user"];
	}
	if($user_name=="ACCOUNT"){
		$link1="signin.php";
		$link2="signup.php";
		$text1="SIGN IN";
		$text2="SIGN UP";
	}else{
		$link1="#";
		$link2="signout.php";
		$text1= "NID: ".$_SESSION["nid"];
		$text2="SIGN OUT";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home - Easy Ride</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="easyRide.js"></script>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script src="modernizr.js"></script>
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

<body id="page"> 
<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>WELCOME</h3></div></li>
            <li><span>Image 02</span><div><h3>SIGN UP</h3></div></li>
            <li><span>Image 03</span><div><h3>SEARCH</h3></div></li>
            <li><span>Image 04</span><div><h3>BOOK A CAR</h3></div></li>
            <li><span>Image 05</span><div><h3>ENJOY</h3></div></li>
            <li><span>Image 06</span><div><h3>IT'S THAT SIMPLE</h3></div></li>
        </ul>
<nav class="navSignIn">
	<div class="dropdown">
  		<button class="dropbtn"><?php echo $user_name ?></button>
		<div class="dropdown-content">
    		<a href=<?php echo $link1 ?>><?php echo $text1 ?></a>
    		<?php if($user_name!="ACCOUNT"){
			?><a href="dashboard.php">DASHBOARD</a><?php
			} ?>
    		<a href=<?php echo $link2 ?>><?php echo $text2 ?></a>
  		</div>
	</div>
</nav>
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
<?php
	if($user_name=="ACCOUNT"){
?><nav class="navMgr">
	<div class="manager">
		<button class="mgrLink">MANAGER</button>
		<div class="mgrcontent">
			<a href="managersignin.php">MANAGER SIGN IN</a>
			<a href="managersignup.php">REQUEST SIGN UP</a>
		</div>
  </div>
</nav><?php
	}
?>
</body>
</html>
