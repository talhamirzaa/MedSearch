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
 
$ce1 = $_POST['ce1']; 
$cp1 = $_POST['cp1']; 
//echo "<br>".$ce1;
//echo "<br>";

// search SQL code
$sql = "select * from customer_register where Email_id LIKE '%".$ce1."%'"; 


$rs = mysqli_query($con, $sql);


        
		$rows = mysqli_num_rows($rs); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
		//echo"<br>" ;   

	if ($rows) {     
    
	while ($row = mysqli_fetch_array($rs))
 	{        
		if($row['Email_id']==$ce1 && $row['pswd']==$cp1)
	{
		header('Location: new search_pg.php');
		
        
	}	
		elseif($row['pswd']!=$cp1)
	{
              echo'<script>
		alert("Fail to Log in \nPlease enter PASSWORD correctly");
			window.location.href="Customer login.html";
			</script>';
	}	
		
	} 
} 


else
{
	echo'<script>
		alert("Fail to Log in \nPlease enter your Registered Email id");
			window.location.href="Customer login.html";
			</script>';
}

?>



