<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
   ?>
			<script>alert('Invalid PNR Number...');
            window.location.href = "index.php";</script>'
			<?php 
   }
if($res0)
   {
    $_SESSION['user']=$id;
	
    ?>
			<script>alert('PNR Number succesfull...');
            window.location.href = "pnrcheckall.php";</script>'
			<?php 
   }
   else
   {
    
    ?>
			<script>alert('Invalid PNR Number...');
            window.location.href = "index.php";</script>'
			<?php 
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
	
	 ?>
			<script>alert('PNR Number succesfull...');
            window.location.href = "pnrcheckall.php";</script>'
			<?php 
   }
   else
   {
    
   ?>
			<script>alert('Invalid PNR Number...');
            window.location.href = "index.php";</script>'
			<?php 
   }
  }
 else
 {
    ?>
			<script>alert('Invalid PNR Number...');
            window.location.href = "index.php";</script>'
			<?php 
			
 
 }
}
?>

