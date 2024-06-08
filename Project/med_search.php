<?php
include("header.php");
?>



<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body
{
	//background:url(serch.jpg);
	background-color: #f1f1f1;
	background-repeat:no-repeat;
	background-position: 400px 9px;
	background-size: 50% 100%;
	font-size:18px;
	font-family:OCR A Std, monospace;
}

html {
  box-sizing: border-box;
  
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
 width:33.33%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 24px 28px 0 rgba(0, 0, 0, 0.7);
  margin: 8px;
  background-color: white;
}

.about-section {
  padding: 50px;
  margin: 10px -10px;
  text-align: center;
  background-color:#707070;
  height:18px;
  font-size:32px;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  text-decoration: none;
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>


<body>
<?php

?>


<div class="about-section">

<a href ="new search_pg.php" Style=""><input type="button" value="Search a Medicince" style="float:left; padding:8px;background:black;color:white;text-decoration: none;font-size:22px;"></a>


<label style="font-family:Jazz LET, fantasy; float:center; color:white;font-size:35px;">Searched Result</label>
</div>

<div class="row">
  <div class="column">
   <form action="manage_cart.php" method="POST">
    <div class="card">
      <div class="container">
<br>
<?php
//med 1

$con = mysqli_connect('localhost', 'root', '','dbtest');
if($con)
{
	//echo"pass";
}
else
{
	echo"hmm";
}
 
$a1 = $_POST['a1']; 

// search SQL code
$sql = "select * from medical_1 where Name LIKE '%".$a1."%'";
$sql1 = "select * from medical_2 where Name LIKE '%".$a1."%'"; 
$sql2 = "select * from medical_3 where Name LIKE '%".$a1."%'"; 
$sql3 = "select * from medical_4 where Name LIKE '%".$a1."%'"; 

$sql4 = "select * from medical_register"; 



$rs = mysqli_query($con, $sql);
$rs1 = mysqli_query($con, $sql1);
$rs2 = mysqli_query($con, $sql2);
$rs3 = mysqli_query($con, $sql3);

$rs4 = mysqli_query($con, $sql4);
$b1; $b2 ;$b3;
$c1;$c2;$c3;
$d1;$d2;$d3;
$e1;$e2;$e3;
$flag=0;


        
		$rows = mysqli_num_rows($rs); 
   		// get number of rows returned 

		$rows4 = mysqli_num_rows($rs4); 
		if ($rows4)
	 {     
	while ($row4 = mysqli_fetch_array($rs4))
 	{        
		if($row4['Medical_Name']=='welcome pharma')
	{		
		$b1=$row4['Medical_Name'];
		$b2=$row4['Addr'];
		$b3=$row4['phone_no'];
	}
	
		elseif($row4['Medical_Name']=='Rohan chemist')
	{		
		$c1=$row4['Medical_Name'];
		$c2=$row4['Addr'];
		$c3=$row4['phone_no'];
	}

		elseif($row4['Medical_Name']=='Metro medical store')
	{		
		$d1=$row4['Medical_Name'];
		$d2=$row4['Addr'];
		$d3=$row4['phone_no'];
	}

		elseif($row4['Medical_Name']=='Wellcare medeco')
	{		
		$e1=$row4['Medical_Name'];
		$e2=$row4['Addr'];
		$e3=$row4['phone_no'];
	}


}
}
	else{}
  

	if ($rows) {     
    
	while ($row = mysqli_fetch_array($rs))
 	{        
		if($row['Name']==$a1)
	{
		$flag=1;
		echo 'Medical Name: '.$b1. '<br>';
		echo 'Medicine Name:' . $row['Name']. '<br>';         
		echo 'Manufacture date: '.$row['Mfg_Dt']. '<br>';  
		$exp=$row['Exp_Dt'];      
		echo 'Expiry date: '.$row['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row['Price'] . '<br>'; 
		echo 'Discount: 10% <br>';     
		$x=$row['Price'];
		$y=($x*10)/100;
		$dis=$x-$y;
		echo 'Our price :'.$dis.'<br>';
		echo 'Address :'.$b2.'<br>';
		echo 'Contact no. :'.$b3.'<br>';
	
 
	}	
		
	} 
} 

else
{

}


	/* 	  $rows1 = mysqli_num_rows($rs1); 
		  

	if ($rows1) {     
    
	while ($row1 = mysqli_fetch_array($rs1))
 	{        
		if($row1['Name']==$a1)
	{
		$flag=1;
		//echo "<br><br>";
		echo 'Medical Name :' .$c1.'<br>';
		echo 'Medicine Name:' . $row1['Name']. '<br>';         
		echo 'Manufacture date: '.$row1['Mfg_Dt']. '<br>';       
		echo 'Expiry date: '.$row1['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row1['Price'] . '<br>'; 
		echo 'Discount: 13% <br>';     
		$x=$row1['Price'];
		$y=($x*13)/100;
		$dis=$x-$y;
		echo 'Our price:'.$dis.'<br>';
		echo 'Address :'.$c2.'<br>';
		echo 'Contact no. :'.$c3.'<br>';
 
	}	
		
	} 
} 

else
{
	
}

		$rows2 = mysqli_num_rows($rs2); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
  

	if ($rows2) {     
    
	while ($row2 = mysqli_fetch_array($rs2))
 	{        
		if($row2['Name']==$a1)
	{
		$flag=1;
		echo "<br><br>";
		echo 'Medical Name:'.$d1.'<br>';
		echo 'Medicine Name:' . $row2['Name']. '<br>';         
		echo 'Manufacture date: '.$row2['Mfg_Dt']. '<br>';        
		echo 'Expiry date: '.$row2['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row2['Price'] . '<br>'; 
		echo 'Discount: 5% <br>';     
		$x=$row2['Price'];
		$y=($x*5)/100;
		$dis=$x-$y;
		echo 'Our price:'.$dis.'<br>';
		echo 'Address :'.$d2.'<br>';
		echo 'Contact no. :'.$d3.'<br>'; 
	}	
		
	} 
} 

else
{
	
}

		$rows3 = mysqli_num_rows($rs3); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
  

	if ($rows3) {     
    
	while ($row3 = mysqli_fetch_array($rs3))
 	{        
		if($row3['Name']==$a1)
	{
		$flag=1;
		echo "<br><br>";
		echo 'Medical Name:'.$e1.'<br>';
		echo 'Medicine Name:' . $row3['Name']. '<br>';         
		echo 'Manufacture date: '.$row3['Mfg_Dt']. '<br>';      
		echo 'Expiry date: '.$row3['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row3['Price'] . '<br>'; 
		echo 'Discount: 18% <br>';     
		$x=$row3['Price'];
		$y=($x*18)/100;
		$dis=$x-$y;
		echo 'Our price:'.$dis.'<br>';
		echo 'Address :'.$e2.'<br>';
		echo 'Contact no. :'.$e3.'<br>';
 
	}	
		
	} 
} 

else
{
	
}*/

	
?>


  <label for="quantity" <?php if($flag==0) {?> style="display: none;" <?php } ?>>Quantity:</label>
 
 <input type="number"  <?php if($flag==0) {?> style="display: none;" <?php } ?>id="quantity" Style="font-size:18px;" name="quantity" min="1" max="20" value="1" onkeydown="return false">


<p><button type="submit" name="Add_To_Cart" <?php 
if($flag==0) {?> style="display: none;" <?php } ?>Style="color:white;background: black;font-size:22px;width:320px;height:40px;" >Add to Cart</button></p>

<input type="hidden" name="Med_Name" value="<?php echo (isset($a1))?$a1:''; ?>" >

<input type="hidden" name="Medical_Name" value="<?php echo (isset($b1))?$b1:''; ?>" >

<input type="hidden" name="Exp_date" value="<?php echo (isset($exp))?$exp:''; ?>" >

<input type="hidden" name="price" value="<?php echo (isset($dis))?$dis:''; ?>" >



 </div>
    </div>
</form>
  </div>




  <div class="column">

<form action="manage_cart.php" method="POST">
	 <div class="card">
      <div class="container">

<?php
//med 2= Rohan

$con = mysqli_connect('localhost', 'root', '','dbtest');
if($con)
{
	//echo"pass";
}
else
{
	echo"hmm";
}
  
$a1 = $_POST['a1']; 
//echo "<br>";

// search SQL code
$sql = "select * from medical_1 where Name LIKE '%".$a1."%'"; 
$sql1 = "select * from medical_2 where Name LIKE '%".$a1."%'"; 
$sql2 = "select * from medical_3 where Name LIKE '%".$a1."%'"; 
$sql3 = "select * from medical_4 where Name LIKE '%".$a1."%'"; 

$sql4 = "select * from medical_register"; // where Name LIKE '%".//$a1."%'"; 



$rs = mysqli_query($con, $sql);
$rs1 = mysqli_query($con, $sql1);
$rs2 = mysqli_query($con, $sql2);
$rs3 = mysqli_query($con, $sql3);

$rs4 = mysqli_query($con, $sql4);
$b1; $b2 ;$b3;
$c1;$c2;$c3;
$d1;$d2;$d3;
$e1;$e2;$e3;
$flag1=0;


        
		$rows = mysqli_num_rows($rs); 
   		// get number of rows returned 

		$rows4 = mysqli_num_rows($rs4); 
		if ($rows4)
	 {     
	while ($row4 = mysqli_fetch_array($rs4))
 	{        
		if($row4['Medical_Name']=='welcome pharma')
	{		
		$b1=$row4['Medical_Name'];
		$b2=$row4['Addr'];
		$b3=$row4['phone_no'];
	}
	
		elseif($row4['Medical_Name']=='Rohan chemist')
	{		
		$c1=$row4['Medical_Name'];
		$c2=$row4['Addr'];
		$c3=$row4['phone_no'];
	}

		elseif($row4['Medical_Name']=='Metro medical store')
	{		
		$d1=$row4['Medical_Name'];
		$d2=$row4['Addr'];
		$d3=$row4['phone_no'];
	}

		elseif($row4['Medical_Name']=='Wellcare medeco')
	{		
		$e1=$row4['Medical_Name'];
		$e2=$row4['Addr'];
		$e3=$row4['phone_no'];
	}


}
}
	else{}
  

		$rows1 = mysqli_num_rows($rs1); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
  

	if ($rows1) {     
    
	while ($row1 = mysqli_fetch_array($rs1))
 	{        
		if($row1['Name']==$a1)
	{
		$flag1=1;
		echo "<br>";
		echo 'Medical Name :' .$c1.'<br>';
		echo 'Medicine Name:' . $row1['Name']. '<br>';         
		echo 'Manufacture date: '.$row1['Mfg_Dt']. '<br>';
		$exp= $row1['Exp_Dt'];      
		echo 'Expiry date: '.$row1['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row1['Price'] . '<br>'; 
		echo 'Discount: 13% <br>';     
		$x=$row1['Price'];
		$y=($x*13)/100;
		$dis=$x-$y;
		echo 'Our price:'.$dis.'<br>';
		echo 'Address :'.$c2.'<br>';
		echo 'Contact no. :'.$c3.'<br>';
 
	}	
		
	} 
} 

else
{
	
}


?>

 <label for="quantity" <?php if($flag1==0) {?> style="display: none;" <?php } ?>>Quantity:</label>
 
 <input type="number"  <?php if($flag1==0) {?> style="display: none;" <?php } ?>id="quantity" name="quantity" Style="font-size:18px;" min="1" max="20" value="1" onkeydown="return false">

<p><button type="submit" name="Add_To_Cart" <?php 
if($flag1==0) {?> style="display: none;" <?php } ?>Style="color:white;background: black;font-size:22px;width:320px;height:40px;" >Add to Cart</button></p>

<input type="hidden" name="Med_Name" value="<?php echo (isset($a1))?$a1:''; ?>" >

<input type="hidden" name="Medical_Name" value="<?php echo (isset($c1))?$c1:''; ?>" >

<input type="hidden" name="Exp_date" value="<?php echo (isset($exp))?$exp:''; ?>" >

<input type="hidden" name="price" value="<?php echo (isset($dis))?$dis:''; ?>" >


 </div>
    </div>
</form>
  </div>
	 




  <div class="column">
<form action="manage_cart.php" method="POST">
    <div class="card">
      <div class="container">
<?php
//med 3=metro

$con = mysqli_connect('localhost', 'root', '','dbtest');
if($con)
{
	//echo"pass";
}
else
{
	echo"hmm";
}
 
$a1 = $_POST['a1']; 
//echo "<br>";

// search SQL code
$sql = "select * from medical_1 where Name LIKE '%".$a1."%'"; 
$sql1 = "select * from medical_2 where Name LIKE '%".$a1."%'"; 
$sql2 = "select * from medical_3 where Name LIKE '%".$a1."%'"; 
$sql3 = "select * from medical_4 where Name LIKE '%".$a1."%'"; 

$sql4 = "select * from medical_register"; // where Name LIKE '%".//$a1."%'"; 



$rs = mysqli_query($con, $sql);
$rs1 = mysqli_query($con, $sql1);
$rs2 = mysqli_query($con, $sql2);
$rs3 = mysqli_query($con, $sql3);

$rs4 = mysqli_query($con, $sql4);
$b1; $b2 ;$b3;
$c1;$c2;$c3;
$d1;$d2;$d3;
$e1;$e2;$e3;
$flag2=0;


        
		$rows = mysqli_num_rows($rs); 
   		// get number of rows returned 

		$rows4 = mysqli_num_rows($rs4); 
		if ($rows4)
	 {     
	while ($row4 = mysqli_fetch_array($rs4))
 	{        
		if($row4['Medical_Name']=='welcome pharma')
	{		
		$b1=$row4['Medical_Name'];
		$b2=$row4['Addr'];
		$b3=$row4['phone_no'];
	}
	
		elseif($row4['Medical_Name']=='Rohan chemist')
	{		
		$c1=$row4['Medical_Name'];
		$c2=$row4['Addr'];
		$c3=$row4['phone_no'];
	}

		elseif($row4['Medical_Name']=='Metro medical store')
	{		
		$d1=$row4['Medical_Name'];
		$d2=$row4['Addr'];
		$d3=$row4['phone_no'];
	}

		elseif($row4['Medical_Name']=='Wellcare medeco')
	{		
		$e1=$row4['Medical_Name'];
		$e2=$row4['Addr'];
		$e3=$row4['phone_no'];
	}


}
}
	else{}
  


		$rows2 = mysqli_num_rows($rs2); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
  

	if ($rows2) {     
    
	while ($row2 = mysqli_fetch_array($rs2))
 	{        
		if($row2['Name']==$a1)
	{
		$flag2=1;
		echo "<br><br>";
		echo 'Medical Name:'.$d1.'<br>';
		echo 'Medicine Name:' . $row2['Name']. '<br>';         
		echo 'Manufacture date: '.$row2['Mfg_Dt']. '<br>';        
		$exp2=$row2['Exp_Dt'];
		echo 'Expiry date: '.$row2['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row2['Price'] . '<br>'; 
		echo 'Discount: 5% <br>';     
		$x=$row2['Price'];
		$y=($x*5)/100;
		$dis=$x-$y;
		echo 'Our price:'.$dis.'<br>';
		echo 'Address :'.$d2.'<br>';
		echo 'Contact no. :'.$d3.'<br>'; 
	}	
		
	} 
} 

else
{
	
}


?>

 <label for="quantity" <?php if($flag2==0) {?> style="display: none;" <?php } ?>>Quantity:</label>
 
 <input type="number"  <?php if($flag2==0) {?> style="display: none;" <?php } ?>id="quantity" name="quantity" Style="font-size:18px;" min="1" max="20" value="1" onkeydown="return false">

<p><button type="submit" name="Add_To_Cart" <?php 
if($flag2==0) {?> style="display: none;" <?php } ?>Style="color:white;background: black;font-size:22px;width:320px;height:40px;" >Add to Cart</button></p>

<input type="hidden" name="Med_Name" value="<?php echo (isset($a1))?$a1:''; ?>" >

<input type="hidden" name="Medical_Name" value="<?php echo (isset($d1))?$d1:''; ?>" >

<input type="hidden" name="Exp_date" value="<?php echo (isset($exp2))?$exp2:''; ?>" >

<input type="hidden" name="price" value="<?php echo (isset($dis))?$dis:''; ?>" >



 </div>
    </div>
</form>
  </div>


  <div class="column">
   <form action="manage_cart.php" method="POST">
    <div class="card">
      <div class="container">

<?php
//med 4

$con = mysqli_connect('localhost', 'root', '','dbtest');
if($con)
{
	//echo"pass";
}
else
{
	echo"hmm";
}
 
$a1 = $_POST['a1']; 


// search SQL code
$sql = "select * from medical_1 where Name LIKE '%".$a1."%'"; 
$sql1 = "select * from medical_2 where Name LIKE '%".$a1."%'"; 
$sql2 = "select * from medical_3 where Name LIKE '%".$a1."%'"; 
$sql3 = "select * from medical_4 where Name LIKE '%".$a1."%'"; 

$sql4 = "select * from medical_register";


$rs = mysqli_query($con, $sql);
$rs1 = mysqli_query($con, $sql1);
$rs2 = mysqli_query($con, $sql2);
$rs3 = mysqli_query($con, $sql3);
$rs4 = mysqli_query($con, $sql4);

$b1; $b2 ;$b3;
$c1;$c2;$c3;
$d1;$d2;$d3;
$e1;$e2;$e3;
$flag3=0;


        
		$rows = mysqli_num_rows($rs); 
   		// get number of rows returned 

		$rows4 = mysqli_num_rows($rs4); 
		if ($rows4)
	 {     
	while ($row4 = mysqli_fetch_array($rs4))
 	{        
		if($row4['Medical_Name']=='Wellcare medeco')
	{		
		$e1=$row4['Medical_Name'];
		$e2=$row4['Addr'];
		$e3=$row4['phone_no'];
	}


}
}
	else{}
 

		$rows3 = mysqli_num_rows($rs3); 
		//echo "selected row=".$rows;
   		// get number of rows returned 
  

	if ($rows3) {     
    
	while ($row3 = mysqli_fetch_array($rs3))
 	{        
		if($row3['Name']==$a1)
	{
		$flag3=1;
		echo "<br>";
		echo 'Medical Name:'.$e1.'<br>';
		echo 'Medicine Name:' . $row3['Name']. '<br>';         
		echo 'Manufacture date: '.$row3['Mfg_Dt']. '<br>';        
		$exp3=$row3['Exp_Dt'];
		echo 'Expiry date: '.$row3['Exp_Dt']. '<br>';        
		echo 'MRP: ' . $row3['Price'] . '<br>'; 
		echo 'Discount: 18% <br>';     
		$x=$row3['Price'];
		$y=($x*18)/100;
		$dis=$x-$y;
		echo 'Our price:'.$dis.'<br>';
		echo 'Address :'.$e2.'<br>';
		echo 'Contact no. :'.$e3.'<br>';
 
	}	
		
	} 
} 

else
{
	
}
	

?>

<label for="quantity" <?php if($flag3==0) {?> style="display: none;" <?php } ?>>Quantity:</label>
 
 <input type="number" <?php if($flag3==0) {?> style="display: none;" <?php } ?>id="quantity" name="quantity" Style="font-size:18px;" min="1" max="20" value="1" onkeydown="return false">

<p><button type="submit" name="Add_To_Cart" <?php 
if($flag3==0) {?> style="display: none;" <?php } ?>Style="color:white;background: black;font-size:22px;width:320px;height:40px;" >Add to Cart</button></p>

<input type="hidden" name="Med_Name" value="<?php echo (isset($a1))?$a1:''; ?>" >

<input type="hidden" name="Medical_Name" value="<?php echo (isset($e1))?$e1:''; ?>" >

<input type="hidden" name="Exp_date" value="<?php echo (isset($exp3))?$exp3:''; ?>" >

<input type="hidden" name="price" value="<?php echo (isset($dis))?$dis:''; ?>" >



 </div>
    </div>
</form>
  </div>

</div>




<?php

if($flag==0 && $flag1==0 && $flag2==0 && $flag3==0 )
	{
		echo"Medicine not Found";
	}

	?>
</body>
</html>