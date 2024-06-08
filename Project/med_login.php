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
 
$b1 =$_POST['b1']; 
$b2= $_POST['b2']; 
//echo "<br>";

// search SQL code
$sql = "select * from medical_register where Email LIKE '%".$b1."%'"; 


$rs = mysqli_query($con, $sql);


        
		$rows = mysqli_num_rows($rs); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
		//echo"<br>" ;   

	if ($rows) {     
    
	while ($row = mysqli_fetch_array($rs))
 	{        
		if($row['Email']==$b1 && $row['passwd']==$b2)
	{
		header('Location: Medical store.html');
		
        
	}	
		elseif($row['passwd']!=$b1)
	{
		echo"<br>Fail to Log in";
		echo "<br>Please enter PASSWORD correctly<br>";                  
	}	
		
	} 
} 


else
{
	echo"<br>Fail to Log in";
	echo "<br>Please Enter your registered Email_id<br>";
	
}

?>

</body>
</html>