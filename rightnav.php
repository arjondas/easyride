<!DOCTYPE html>
<html>
<?php
	include("dbconnect.php");
	$sql4="select not_1 from customer where NID=".$_SESSION['nid'];
	$query4= mysqli_query($dbconnect,$sql4);
	$row4= mysqli_fetch_assoc($query4);
	include("specialprice.php");
	include("noticeboard.php");
?>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav2 {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: rgba(0,0,0,0.7);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	color: white;
	letter-spacing: 2px;
	text-align: center;
}
.sidenav2 a {
    text-decoration: none;
    font-size: 25px;
    color: red;
    display: block;
    transition: 0.3s;
	border: none;
	height: 0px;
	width: 0px;
}
.sidenav2 a:hover, .offcanvas a:focus{
    color: #f1f1f1;
	background-color: rgba(0,0,0,0);
}
	
@media screen and (max-height: 250px) {
  .sidenav2 {padding-top: 5px;}
  .sidenav2 a {font-size: 18px;}
  
}

.sidenav2 #closebtn2{
	position: absolute;
    top: 0;
    font-size: 36px;
}

#reset{
	height: 15px;
	font-size: 10px;
	border: none;
	letter-spacing: 2px;
	background-color: rgba(0,0,0,0.5);
	color: white;
}

#notice{
	width: 250px;
	position:fixed;
	bottom: 15px;
	border-top: 2px solid white;
	color: white;
}
#clear{
	width: 250px;
	height: 15px;
	font-size: 10px;
	position: fixed;
	bottom: 0;
	right: 0;
	border:none;
	background-color: rgba(0,0,0,0.5);
	color: white;
}
#sp_price th,#sp_price tr,#sp_price td,#notice th,#notice tr,#notice td,#reject th,#reject td,#reject tr{
	border-top: 1px solid white;
	border-bottom: 1px solid white;
	border-left: none;
	border-right: none;
}
	
	#notice td{
		height: 100px;
		border-bottom: none;
	}
	#notice tr{
		border-bottom: none;
	}
</style>
<body>
<div id="mySidenav2" class="sidenav2">
<a href="javascript:void(0)" id="closebtn2" onclick="closeNav2()";>&times;</a><br>
<table id="reject" style="width: 250px; border-color: white;">
<?php
	if($row4['not_1']!=NULL){
		echo "Rejected requests:<br><br>".$row4['not_1'];
	}else{
		echo "Rejection list is empty";
	}
?>
</table><br>
<button id="reset" onClick="clrrj('<?php echo $_SESSION['nid']; ?>')" style="display: block;text-align: center;width: 250px;">Clear</button><br><br>

<table id="sp_price" style="width: 250px;border-bottom: 2px solid white;border-top: 2px solid white;">
	<tr><th>Price Discount</th></tr>
	<?php echo $price; ?>
</table>

<table id="notice">
	<tr><th>Managers Notice</th></tr>
	<?php echo $not; ?>
</table>
<button id="clear" onClick="clrnt('<?php echo $_SESSION['nid']; ?>')">Clear</button>
</div>
<script>
function openNav2() {
    document.getElementById("mySidenav2").style.width = "250px";
}

function closeNav2() {
    document.getElementById("mySidenav2").style.width = "0";
}
function clrrj(str) {
	  if (str=="") {
		document.getElementById("reject").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("reject").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","clear.php?q="+str,true);
	  xmlhttp.send();
	}
function clrnt(str){
	 if (str=="") {
		document.getElementById("notice").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.open("GET","clear2.php?q="+str,true);
	  xmlhttp.send();
}
</script>
     
</body>
</html> 

