<html>
<body>
<?php

$con = mysqli_connect('localhost', 'root', '','dbtest');
if($con)
{
	//echo"pass";
}
else
{
	echo"hmm";
}
echo"<br>";

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$p1 = $_POST['p1']; 
$t3 = $_POST['t3']; 
 

$sql = "INSERT INTO customer_register VALUES('$t1', '$t2', '$p1', '$t3')";

	
$rs = mysqli_query($con, $sql);

if($rs)
{

	header('Location:new search_pg.php');
}
else
{
	echo "Fail to Register";	
}

?>



</body>
</html>