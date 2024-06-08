<?php
include("header.php");
?>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>

	<meta http-equiv="refresh" content="7" />
<style>

body
{
	background:url(srch_img.jpg);
	background-repeat:no-repeat;
	background-position: 300px 9px;
	background-size: 50% 100%;
	font-family: "Times New Roman", Times, serif;
}

</style>

<script Language="JavaScript">
var flag;
	 
function check()
{
 with(document.forms.srch)
 { 
	if(a1.value!="" && r1.checked==true)
	{
	 document.srch.action="http://localhost/Project/med_search.php";
	}
	else
	{
		if(r1.checked==false)
	{
	 alert("Without Accessing Location,Medicine can't be Searched.");
 	 document.srch.action="new search_pg.php";
	}
	if(a1.value=="")
	{
	alert("Please enter medicine name.");
	document.srch.action="new search_pg.php";
	 }
	}

  }
}
function btn_enable()
{
 with(document.forms.srch)
 {
	document.getElementById("b2").disabled=false;	
	getLocation();
  }
}

</script>
</head> 
<center>
<body>
<p id="demo"></p>

<script>

var x = document.getElementById("demo");

function getLocation() {
	with(document.forms.srch)
 {
	if(r1.checked==true)
{
 
  if (navigator.geolocation)
 {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } 
else 
{ 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
  }
}
}


function showPosition(position) {
	with(document.forms.srch)
 { 

 alert("Allow to Access your Location");
  //x.innerHTML = "Latitude: " + position.coords.latitude + 
  //"<br>Longitude: " + position.coords.longitude;
 }
}

function showError(error)
 {
with(document.forms.srch)
 { 

  switch(error.code) {
    case error.PERMISSION_DENIED:
      alert("Without Location,Medicine can't be found.");
	document.getElementById("b2").disabled=true;
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      alert( "An unknown error occurred.");
      break;
  }
 }
}

</script>







<form name=srch method="post">


<br><br><br><br><br><br>

<br><label style="font-size:32px">Medicine Name:</label>
&nbsp&nbsp&nbsp;<input type="text" style="height:38px; width:180px" placeholder="Search your Medicine here" name="a1" id="a1">

<br><label style="font-size:30px">Location Access:</label>
<input type="checkbox" style="height:22px; width:80px ; padding: 8px 26px;" name="r1" id="r1">


<br><br>&nbsp&nbsp&nbsp 
<input type="button" value="Allow to Access Your Location"   name="v1" id="v1" onclick="getLocation()" style="padding: 8px 26px;background-color:black;color:white;font-size:18px" >


&nbsp&nbsp&nbsp&nbsp&nbsp<br><br><input type="submit" value="Search" id="b2" style="font-size:18px; height:40px;color:black" onclick="check()">

<input type="reset" value="Reset" onclick="btn_enable()" style="font-size:18px;height:40px;color:white; background-color:grey">
</form>
</body>
</html>