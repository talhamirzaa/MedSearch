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

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname']; 
$email1 = $_POST['email1']; 
$phone = $_POST['phone']; 
$pass1 = $_POST['pass1']; 
 

$sql = "INSERT INTO medical_register VALUES('$fname', '$mname', '$lname', '$email1' , '$phone', '$pass1')";

	
$rs = mysqli_query($con, $sql);

if($rs)
{

	header('Location: Medical store.html');
}
else
{
	echo "Fail to Register";	
}

?>



</body>
</html>