<!doctype html>
<html>
<head>
<link href="css/downnav.css" rel="stylesheet" type="text/css">
<script>
	function openNav() {
		document.getElementById("mySidenav").style.height = "250px";
    	document.getElementById("main").style.marginBottom = "250px";
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
	  xmlhttp.open("GET","getuser.php?q="+str,true);
	  xmlhttp.send();
	}
	function myFunction1(str) {
	  if (str=="") {
		document.getElementById("atlast").innerHTML="";
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
		  document.getElementById("atlast").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","username.php?q="+str,true);
	  xmlhttp.send();
	}
	function yesFunction(str) {
	  if (str=="") {
		document.getElementById("confirm1").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	  } else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.open("GET","confirmyes.php?q="+str,true);
	  xmlhttp.send();
	}
	function no(str) {
	  if (str=="") {
		document.getElementById("confirm2").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.open("GET","confirmno.php?q="+str,true);
	  xmlhttp.send();
	}
	function message(str) {
	  if (str=="") {
		document.getElementById("not2").innerHTML="";
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
		  document.getElementById("not2").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","notifyuser.php?q="+str,true);
	  xmlhttp.send();
	}
	function history(str) {
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.open("GET","historysetting.php?q="+str,true);
	  xmlhttp.send();
	}
</script>
</head>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div id="atlast" style="color: white;margin: 20px;">Wat's up DOC</div>
    <form>
  	<p8 style="color: white;margin-left: 20px;display: inline-block">Set record :</p8>
	    <input type = "text" id = "record" onkeydown = "if (event.keyCode == 13) document.getElementById('input').click()">
        <input type = "button" id = "input" value = "Set" onclick = "history(record.value)">
  </form>
  <div id="txtHint" style="color: white">Google</div>
  <form>
  	<p8 style="color: white;margin-left: 20px;display: inline-block;margin-bottom: 20px;">Send notice :</p8>
	    <input type = "text" id = "notice" onkeydown = "if (event.keyCode == 13) document.getElementById('enter').click()">
        <input type = "button" id = "enter" value = "Send" onclick = "message(notice.value)"><br><br><br>
  </form>
</div>
</body>
</html>