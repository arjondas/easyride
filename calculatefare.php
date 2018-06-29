<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculate Fare</title>
<script>
	function myFunction(str1) {
	  if (str1=="") {
		document.getElementById("calc").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest()
	  } else { 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("calc").innerHTML=str1;
		}
	  }
	  xmlhttp.open("GET","clear.php?q="+str1,true);
	  xmlhttp.send();
	}
</script>
<style>
	#calc{
		font-family: Helvetica Neue, Helvetica, Arial," sans-serif";
		font-size: 20px;
		background-color: white;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
		padding: 30px 20px;
		text-align-last: center;
	}
	body{
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: rgba(0,0,0,0.3);
		font-family: Helvetica Neue, Helvetica, Arial," sans-serif";
	}
</style>
</head>

<body>
	<a href="index.php" style="display: inline-block;text-decoration: none;padding: 15px 333px;background-color: rgba(0,0,0,0.4);text-align: center;color: black;">HOME</a>
	<div id="calc">
	<form method="post" action="fareentry.php">
		Car Type:
	<select name="type">
	<option value="SUV">SUV</option>
	<option value="Sedan">Sedan</option>
	<option value="Mini-Truck">Mini-Truck</option>
	<option value="HIACE">HIACE</option>
	</select>&nbsp;&nbsp;
  	Hours:
  	<input type="number" name="hour">
  	Driver Needed:
  	<select name="dri">
  		<option value=0></option>
  		<option value=200>YES</option>
		<option value=0>NO</option>
  	</select>
		<input type="submit" onClick="myFunction(type.value)" style="width: 50px;">
	</form>
	</div>
</body>
</html>