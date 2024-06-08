<?php

include("header.php");
//session_start();
?>


<html lang="en">
<head>

<style>

body
{
	height: 100%;
	background:url(cart2.jpg);
	background-repeat:no-repeat;
	background-position: 0px 250px;
	background-size: 70% 80%;
}
</style>


	<meta http-equiv="refresh" content="2" />
	<meta cahrset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div style="margin:10px 35px;">
<a href ="new search_pg.php" Style=""><input type="button" value="Search a Medicince" style="background:black;color:white;text-decoration: none;font-size:22px;"></a>
</div>

<div style="margin-top:-50px; margin-bottom:10px; margin-right:0px; margin-left: 1000px;">
<a href ="order.php" Style=""><input type="button" value="View Your Orders" style="background:black;color:white;text-decoration: none;font-size:22px;"></a>
</div>


   <div class="container">
	<div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-3">
	<h1>MY CART</h1> 
	</div>

            <div class="col-lg-9">
		
		<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Medical Name</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Discard</th>

    </tr>
  </thead>
  <tbody class="text-center">
<?php
 
 $total=0;
 $q=0;
 $p=0;
 $fprice=0;
 if(isset($_SESSION['cart']))
{
 foreach($_SESSION['cart'] as $key=>$value)
 {
	$sr=$key+1;	
 	//print_r($value);
	$q=$value['quantity'];
	//echo"<br>$q";
	$p=$value['price'];
	$fprice=$p*$q;
	//echo"<br>$fprice";		  
	$total=$total+$fprice;
	//echo"<br>$total";	

  echo"  
  <tr>
     
      <td>$sr</td>
      <td>$value[Med_Name]</td>
      <td>$value[Medical_Name]</td>
      <td>$value[Exp_date]</td>
      <td>$value[quantity]</td>
      <td>$fprice</td>
      <td>
	<form action='manage_cart.php' method='POST'>
	<button name='remove' class='btn btn-sm btn-outline-danger'>Remove</button>
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

	<div class="col-lg-3">
	  <div class="border bg-light rounded p-4">
	  <h4>Total:</h4>
	  <h5 style="text-align:right;"><?php echo$total ?> Rs</h5>
	 
	<form action="order_manage.php" method="POST">
	   <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Cash On Delivery
  </label>
	 <p></p>

	 <button type="submit" name="buy" class="btn btn-primary btn-block">Purchase</button>



	</form>
	   </div>
	
	</div>

   </div>
</div>



</body>
</html>

