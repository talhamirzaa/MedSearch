<?php
session_start();  
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['Add_To_Cart']))
	{
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION	['cart'],'Med_Name'); 
			if(in_array($_POST['Med_Name'],$myitems))
			{
				echo"<script>
				alert('Medicine Already Added');
			window.location.href='new search_pg.php';
				</script>";
			}
		
	
			else
			{
			
			$count=count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('Med_Name'=>$_POST					['Med_Name'], 'Medical_Name'=>$_POST['Medical_Name'], 					'Exp_date'=>$_POST['Exp_date'], 'quantity'=>$_POST					['quantity'], 'price'=>$_POST['price']) ; 
					echo"<script>
				alert('Medicine Added into the Cart');
			window.location.href='new search_pg.php';
				</script>";
			}
			
					}
		
		else
		{
		
		  $_SESSION['cart'][0]=array('Med_Name'=>$_POST	['Med_Name'], 'Medical_Name'=>$_POST['Medical_Name'], 'Exp_date'=>			$_POST['Exp_date'], 'quantity'=>$_POST['quantity'], 'price'=>$_POST['price']) ; 
				echo"<script>
				alert('Medicine added');
			window.location.href='new search_pg.php';
			
		</script>";
		}

		}
		
	if(isset($_POST['remove']))
	{
		foreach($_SESSION['cart'] as $key=>$value)
		{
		 if($value['Med_Name']==$_POST['Med_Name'])
		  {
		     unset($_SESSION['cart'][$key]);
		     $_SESSION['cart']=array_values($_SESSION['cart']);
		     echo"<script>
			alert('Medicine Removed');
			window.location.href='cart.php';
			</script>";
		  }
		}
	}

	
} 



?>