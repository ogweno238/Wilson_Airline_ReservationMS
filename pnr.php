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
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    ?>
			<script>alert('Invalid Ticket Number');
            window.location.href = "print_booked_tickets.php";</script>'
			<?php
   }
  }
 else
 {
     ?>
			<script>alert('Please Enter Valid Ticket Number');
            window.location.href = "print_booked_tickets.php";</script>'
			<?php
 
 }
}
?>

