
<?php
session_start();
include("config.php");
$name = $_POST['name'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
                           
//$username=$_POST['username'];
$customer_id=$_POST['customer_id'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

if($password == $rpassword)
{
 								  
    							  
	$insertloginQuery = "insert into airline_login(customer_id,password,last_logindatetime) 
	                                   values ('".$customer_id."','".$password."',now())";
									   
	$insertQuery = "insert into customer(name,phone_no,email,customer_id,password)
											values('".$name."','".$phone_no."','".$email."','".$customer_id."','".$password."')";
	
	$sql1 = "select email from customer where email = '$email'";
    $result1 = mysql_query($sql1) or die ("Couldn't execute query.");										  
    
	$num1=mysql_num_rows($result1);
	
	if($num1 == 1)
	{   ?>
			<script>alert('Sorry username already exist ...');
            window.location.href = "index.php";</script>'
           
         
            
			<?php
		 
	}
	else
	{
		
		
		
		if((mysql_query($insertloginQuery)) && (mysql_query($insertQuery)))
		  {
			
		?>
			<script>alert('Registered Successfully');
            window.location.href = "index.php";</script>
           
         
            
			<?php	  
		   }
		else
		 {
			
		?>
			<script>alert('Not Registered!');
            window.location.href = "index.php";</script>
           
         
            
			<?php
		  }
       }
	 }   
else
 {
   echo "Error:Password missmatch";
  }
?>