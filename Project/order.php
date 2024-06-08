<?php

include("header.php");
//session_start();
?>


<html lang="en">
<head>

<style>

body
{
	background:url(order_img4.jpg);
	background-repeat:no-repeat;
	background-position: 0px 50px;
	background-size:100% 100%;
	
}
</style>


	<meta http-equiv="refresh" content="4" />
	<meta cahrset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

   <div class="container">
	<div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-3">
	<h1>Your Order(s)</h1> 
	</div>

            <div class="col-lg-9">
		
		<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Delivery Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Cancel Order</th>

    </tr>
  </thead>
  <tbody class="text-center">
<?php
$Date = date('d-m-Y');
 
$dt=date('d-m-Y', strtotime($Date. ' + 1 days')); 
 $sr=0; 
 $total=0;
 $q=0;
 $p=0;
 $fprice=0;
 if(isset($_SESSION['order']))
{	
	 foreach($_SESSION['order'] as $key=>$value)
 {
	$sr=$key+1;	
 	//print_r($value);
	$q=$value['quantity'];
	$p=$value['price'];
	$fprice=$p*$q;
	$total=$total+$fprice;

  echo"  
  <tr>
     
      <td>$sr</td>
      <td>$value[Med_Name]</td>
      <td>$dt</td>
      <td>$value[quantity]</td>
      <td>$fprice</td>
      <td>
	<form action='order_manage.php' method='POST'>
	<button name='cancel' class='btn  btn-outline-danger'><strong>Cancel <img src='icon-delete.png' alt='Remove Item' /></strong></button>
	<input type='hidden' name='Med_Name' value='$value[Med_Name]'>
	</form>
</td>

     
<td></td>
    
  </tr>
     ";   
 }
}

?>


  </tbody>
</table>
	    </div>

	<div class="col-lg-5">
	  <div class="border bg-light rounded p-4">
	  <h4>Total Amount:</h4>
	  <h4 style="text-align:right;"><?php echo$total ?> Rs</h4>
	 <h5>Payment Mode: <b style="color:#003380;">Cash On Delivery
		<img src="cash-on-delivery.png" width="40" height="40"></b>
	</h5>

	</div>
	
	</div>

   </div>
</div>



</body>
</html>

