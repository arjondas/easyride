<!DOCTYPE html>
<html>
<head>
<script src="jQuery.js"></script>
<link href="jQuerystyle.css" rel="stylesheet" type="text/css">
<script>
  $(document).ready(function() {
    $("#departing").datepicker();
    $("#returning").datepicker();
    $("button").click(function() {
    	var selected = $("#dropdown option:selected").text();
        var departing = $("#departing").val();
        var returning = $("#returning").val();
        if (departing === "" || returning === "") {
			alert("Please select departing and returning dates.");
        } else {
			confirm("Would you like to go to " + selected + " on " + departing + " and return on " + returning + "?");
        }
    });
});
</script>
<style>
	h2 {
    font-family: Verdana, Arial, sans-serif;
    text-align: center;
	color: #FFFFFF;
}

#header {
	width: 100%;
	height: 70px;
	position: relative;
	top: -40px;
	background-color: #7FC7AF;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

p {
    font-family: Verdana, Arial, sans-serif;
    font-size: 1em;
}

.left {
	position: relative;
	top: -40px;
    float: left;
}

.right {
	position: relative;
	top: -40px;
    float: right;
}

#main {
	position: relative;
	top: 170px;
	float: left;
}	
</style>
</head>
<body>
	<div id="header">
			<h2><br/>Select a Destination</h2>
		</div>
        <div class="left">
            <p>Departing: <input type="text" id="departing"></p>
        </div>
        <div class="right">
            <p>Returning: <input type="text" id="returning"></p>
        </div><br/>
        <div id="main">
        	<p>Destination: <select id="dropdown">
				<option value="newyork">New York</option>
				<option value="london">London</option>
				<option value="beijing">Beijing</option>
				<option value="moscow">Moscow</option>
			</select></p>
			<button>Submit</button>
        </div>
</body>
</html>

