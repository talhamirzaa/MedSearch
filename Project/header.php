<?php
session_start();
/*
// 1 hours in seconds
$inactive = 3600; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours


if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // Update session
*/
?>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body
{
	//background:url(serch.jpg);
	background-repeat:no-repeat;
	background-position: 400px 9px;
	background-size: 50% 100%;
	font-size:18px;
	font-family:OCR A Std, monospace;
}

</style>  


</head>


<body>

<style>

ul {
  list-style-type: none;
  margin: -10px -7px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
 font-family: "Times New Roman", Times, serif;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: grey;
}

li button:hover:not(.active) {
  background-color: grey;
}


.active {
  background-color: grey;
}

</style>


<ul>
  <li><a href="#med"><i class="fa fa-plus-square" ></i> MedSearch</a></li>
  <li><a href="Home_page.html"><i class="fa fa-fw fa-home"></i>Home</a></li>
  <li><a href="#service"><i class="fa fa-gears"></i>Our Service</a></li>
  <li><a href="About us.html"><i class="fa fa-group"></i>About Us</a></li>
  <li><a href="contact us.html"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>

<div id="mycart">  

<?php
$c;
	if(isset($_SESSION['cart']))
	{
	 $c=count($_SESSION['cart']);
	}

?>
<li style="float:left-left;"><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:18px"> My Cart (<?php if(isset($_SESSION['cart'])) echo $c;
else
echo"0"; ?>)</i>
</a></li>
</div>


<form action="session_end.php" method="POST">
<li style="float:right;">
<button type="submit" name="lo" Style="font-size:20px; color:black; background-color: white; height:48px; width:108px;
 font-family:Times New Roman", Times, serif;"><i class="fa fa-sign-out" style="font-size:20px">Logout</i></button></li>
</form>

</ul>


</body>
</html>
