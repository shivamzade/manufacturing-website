<?php
session_start();
$user_id = $_SESSION['user_id'];
if(!empty($_SESSION['user_id']))
{	
   $user_id=$_SESSION['user_id'];
}
else
{
	session_destroy();	
		header('location:index.php');
}
?>

<?php

include "../connect.php";

error_reporting(0);
?>
<?php

$unique_id=$_GET['uni'];

$query = mysqli_query($conn,"UPDATE  customer_registration SET mail_verified_status='approved' WHERE unique_id='$unique_id'");

		  
?>
	            <SCRIPT LANGUAGE='JavaScript'>	
				alert("Your email id verified successfully..");
				location.href="index.php";
				</SCRIPT>				