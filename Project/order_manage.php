<?php
session_start();  
//session_destroy(); 

if($_SERVER["REQUEST_METHOD"]=="POST")
{	
	if(isset($_POST['buy']))
	{
		if($_SESSION['cart']!=null)
		{ 
			
		
			$_SESSION['order']=array_values($_SESSION['cart']);	
			echo"<br><br>";

			//print_r($_SESSION['order']);	
			echo"<script>
			alert('your order has been successfully placed!');
			window.location.href='order.php';
				</script>";
			echo"<br><br>";

			foreach($_SESSION['cart'] as $key=>$value)
			{
			echo"<br><br>";
			$cnt=count($_SESSION['cart']);
				
			for($i=0;$i<$cnt;$i++)
			{
		     	unset($_SESSION['cart'][$i]);			
			$_SESSION['cart']=array_values($_SESSION['cart']);	

				}
			echo"<br><br>";
			}
		
		
	}
		else
		{
			echo"<script>
				alert('No Item in the Cart');
			window.location.href='cart.php';
				</script>";					

		}
	}





		
	if(isset($_POST['cancel']))
	{
		foreach($_SESSION['order'] as $key=>$value)
		{
		 if($value['Med_Name']==$_POST['Med_Name'])
		  {
		     unset($_SESSION['order'][$key]);
		     $_SESSION['order']=array_values($_SESSION['order']);
		     
			echo"<script>	
			alert('Order Cancelled');
			window.location.href='order.php';
			</script>";
		  }
		}
	}

	
} 


?>