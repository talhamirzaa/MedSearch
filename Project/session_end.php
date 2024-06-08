<?php
session_start();  
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['lo']))
	{
		if(isset($_SESSION['cart']))
		{
	
		session_unset();     
    		session_destroy();   
				echo"<script>
				alert('Successfully Logged Out');
			window.location.href='Home_page.html';
				</script>";
			
			}
		else
		{
		session_unset();     
    		session_destroy();   
				echo"<script>
				alert('Successfully Logged Out');
			window.location.href='Home_page.html';
				</script>";
		}


		}
	}
?>

<?php 
/*
if(isset($_POST['lo']))
	{

	echo"<script>
		alert('pr');
</script>";
	
if(isset($_SESSION['cart'])) 
{
	session_unset();     
    	session_destroy();   
 }
}
*/
 ?>
