<html>
<html>

<head>

<style>

table

{

border-style:solid;
width: 70%;
border-width:3px;

border-color:black;

}

</style>

</head>
<body bgcolor="lightcyan">
<center>
<h2>Medicine Data</h2>
<?php

$con = mysqli_connect('localhost', 'root', '','dbtest');
if($con)
{
	//echo"pass";
}
else
{
	//echo"hmm";
}

$mname2=$_POST['mname2']; 


$f=0;
// search SQL code
$sql = "SELECT * FROM medical_1 where Name like '%".$mname2."%' "; 

$rs = mysqli_query($con, $sql);

        
		$rows = mysqli_num_rows($rs); 
		//echo "selected row=".$rows;
   		// get number of rows returned  
		
		echo "<table border='1'>

<tr>

<th>Id</th>

<th>Medicine Name</th>

<th>Manufacture date</th>

<th>Expiry Date</th>

<th>Price</th>

</tr>";

	if ($rows) {     
    
	while ($row = mysqli_fetch_array($rs))
 	{         
			if($row['Name']==$mname2)
	{
		$f=1;
		  echo "<tr>";

  echo "<td>" . $row['ID'] . "</td>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['Mfg_Dt'] . "</td>";

  echo "<td>" . $row['Exp_Dt'] . "</td>";

  echo "<td>" . $row['Price'] . "</td>";

  echo "</tr>";        
	} 
	echo "</table>";
	}
} 


else
{
	echo"<br>fail";
}

if($f==0)
 echo"<br>Medicine Not Available"

?>


</center>
</body>
</html>