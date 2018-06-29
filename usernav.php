<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="css/downnav.css" rel="stylesheet" type="text/css">
<style>
	.hrs{
		background-color: rgba(0,0,0,0.1);
		color: white;
		border: 2px solid rgba(0,0,0,0.5);
		padding-left:5px;
		padding-right: 5px;
		border-radius: 5px;
		height: 20px;
	}	
	#date{
		background-color: rgba(0,0,0,0.1);
		color: white;
		border: 2px solid rgba(0,0,0,0.5);
		padding-left:5px;
		padding-right: 5px;
		border-radius: 5px;
		height: 20px;
	}
	#insdate{
		border: 3px solid rgba(0,0,0,0.3);
		border-radius: 15px;
		text-align: center;
		color: white;
		background-color: rgba(0,0,0,0.1);
	}
	#insdate hover{
		border: 3px solid rgba(0,0,0,0.5);
		background-color: rgba(0,0,0,0.5);
	}
	.sidenav #btn{
		float: right;
		margin: 0;
		font-size: 250%;
		font-weight: 300;
	}
</style>
<script>
	function openNav() {
		document.getElementById("mySidenav").style.height = "250px";
    	document.getElementById("main").style.marginBottom = "250px";
		document.getElementById("userhdd").reset();
	}
	function closeNav() {
    	document.getElementById("mySidenav").style.height = "0";
		document.getElementById("main").style.marginBottom = "0";
	}
	function myFunction(str) {
	  if (str=="") {
		document.getElementById("txtHint").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("txtHint").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","bookedcarinfo.php?q="+str,true);
	  xmlhttp.send();
	}
	function myFunction1(str) {
	  if (str=="") {
		document.getElementById("atlast").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("atlast").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","hoursetup.php?q="+str,true);
	  xmlhttp.send();
	}
	function myFunction2(str) {
	  if (str=="") {
		document.getElementById("atsecond").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("atsecond").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","driversetup.php?q="+str,true);
	  xmlhttp.send();
	}
	function myFunction3(str) {
	  if (str=="") {
		document.getElementById("atthird").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("atthird").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","datenter.php?q="+str,true);
	  xmlhttp.send();
	}
	function calculate(str) {
	  if (str=="") {
		document.getElementById("atfourth").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("atfourth").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","calculator.php?q="+str,true);
	  xmlhttp.send();
	}
</script>
</head>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" id="btn" onclick="closeNav()";>&times;</a>
  <div id="txtHint" style="color: white; margin-left: 30px;">Google</div>
  <div>
    <div id="atfourth" style="color: white;float: right;margin-right: 50px;font-size: 350%;font-weight: 300;z-index: 1"></div>
  	<form id="userhdd" style="margin-left: 30px">
  		<p8 style="color: white;margin: 20px">Hours: </p8><input class="hrs" type="number" onKeyUp="myFunction1(this.value)"><div id="atlast" style="color: white;margin-left: 20px;display: inline-block"></div><br>
  		<p8 style="color: white;margin-left: 20px;display: inline-block">Driver Needed </p8>
  		<select class="hrs" onChange="myFunction2(this.value)">
  			<option value=""></option>
  			<option value="YES">YES</option>
  			<option value="NO">NO</option>
  		</select>
  		<div id="atsecond" style="color: white;margin: 20px;display: inline-block"></div><br>
  		<p8 style="color: white;margin-left: 20px;display: inline-block;margin-bottom:30px;">Car Receive Date </p8>
	    <input type = "text" id = "date" onkeydown = "if (event.keyCode == 13) document.getElementById('insdate').click()" placeholder="dd/mm/yyyy">
        <input type = "button" id = "insdate" value = "Insert" onclick = "myFunction3(date.value)"><div id="atthird" style="color: white;margin: 20px;display: inline-block;"></div><br>
  	</form>
  </div>
</div>
</body>
</html>