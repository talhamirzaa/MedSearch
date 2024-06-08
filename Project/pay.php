<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
    $qualification = $_POST['qualification'];
	$specialization =  $_POST['specialization'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','login_register_pure_coding');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number,qualification,specialization) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssiss", $firstName, $lastName, $gender, $email, $password, $number,$qualification,$specialization);
		$execval = $stmt->execute();
		echo $execval;
		echo "You Have Sucessfully Registerd.";
		$stmt->close();
		$conn->close();
	}
?>
<html>
<body>
<form>
<button type="button">Delete Your Data   .
</button>
</form>
</body>
</html>