 <?php 	
error_reporting(0);
	include"../connect.php";	
	
	$company_name = $_POST['company_name'];
	$contactperson = $_POST['contactperson'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$business_type = $_POST['business_type'];
	$city = $_POST['city'];	

	$u_id = rand().date("Ymdhis");	
	$passgene=1234;
    $date11=date("Y-m-d");
 // $product_category = $_POST['product_category'];
	

	
	 $res="insert into  customer_registration (unique_id,mail_verified_status,name_of_organization,contact_person,contact_number,email,city,user_name,password,reg_date,expire_date,business_segment,is_del) values('$u_id','no','$company_name','$contactperson','$contact','$email','$city','admin','$passgene','".date("Y-m-d")."','".date('Y-m-d', strtotime($date11. ' + 10 days'))."','$business_type','approved')";
	

	

	
	
	/*start of use registration*/
	
	 $message11='
								 <br>
								  Hi '.$name_of_organization.'<br>
								  <br>
								  Your Username and Password are as follows:
								  <br>
								  Username : '.$email.'<br>
								  Password : '.$passgene.'<br>
								  Expirydate : '.date('Y-m-d', strtotime($date11. ' + 10 days')).'<br>
								 Note:Password is valid till Expiry Date.<br>
								 
                                 To Activate your profile click on below link or copy link to url bar(address bar)<br>			
								 https://accounttick.com/accounttick_new_demo/activate_email_status.php?uni='.$u_id.'
                               
								 <br>
								 <br>
								 Regards,<br>
								Highclonoid Softec Pvt. Ltd. Team<br>
								 Team For Login Issues: send your query on highclonoidsoftec.com@gmail.com OR Call +91-9699739590.<br>
								  ';
								  $to=$email;
								
								  $subject1 = "Username And Password For Accounttick software.Thank you for register in accounttick.com";
								  $mail_body ='
								  
								
								  
								  Message:'.$message11.'
								  ';
								 
								 
								  $headers = "From:accounttick@accounttick.com"." \r\n";
								  $headers  .= "MIME-Version: 1.0"."\r\n";
								  $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
								  mail($to,$subject1,$mail_body,$headers);
							
							
							/*end of use registration*/
	
	
	
		/*start of use registration*/
	
	 $message11='
								 <br>
								  Hi '.$name_of_organization.'<br>
								  <br>
								  Your Username and Password are as follows:
								  <br>
								    Name Of Contact Person : '.$contactperson.'<br>
								  Username : '.$email.'<br>
								   contact : '.$contact.'<br>
								   Business : '.$business_type.'<br>
								   	   City : '.$city.'<br>
								  Password : '.$passgene.'<br>
								  Expirydate : '.date('Y-m-d', strtotime($date11. ' + 10 days')).'<br>
								 Note:Password is valid till Expiry Date.<br>
								 
                                 To Activate your profile click on below link or copy link to url bar(address bar)<br>			
								 https://accounttick.com/accounttick_new_demo/activate_email_status.php?uni='.$u_id.'
                               
								 <br>
								 <br>
								 Regards,<br>
								Highclonoid Softec Pvt. Ltd. Team<br>
								 Team For Login Issues: send your query on highclonoidsoftec.com@gmail.com OR Call +91-9699739590.<br>
								  ';
								  $to="highclonoidsoftec.com@gmail.com";
								
								  $subject1 = "Enquiry for Accounttick Software Username And Password For Accounttick software.Thank you for register in accounttick.com";
								  $mail_body ='
								  
								
								  
								  Message:'.$message11.'
								  ';
								 
								 
								  $headers = "From:accounttick@accounttick.com"." \r\n";
								  $headers  .= "MIME-Version: 1.0"."\r\n";
								  $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
								  mail($to,$subject1,$mail_body,$headers);
							
							
							/*end of use registration*/
	
	
	
	
	
	
	
	
	
	if(mysqli_query($conn,$res) == TRUE)	
	{		
		echo '<script>';		
		echo'window.location="index.php";';		
		echo'</script>';	
	}
?>

	