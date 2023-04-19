<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="admin/img/ndege.jpg"/> 
		<h3 id='title' style="width:40px">
			WILSON AIRLINE RESERVATION
		</h3>
		<div style="background-color:#993">
			<ul >
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>BOOKING SUCCESSFUL</h2>
		<?php include('dbcon.php'); ?>
                                 <?php  $user_query=mysql_query("select * from payment_details LEFT JOIN airline_details ON payment_details.airline_no=airline_details.airline_no where customer_id='".$_SESSION['login_user']."'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['airline_no'];  
									$cat_id=$row['airline_no'];

											$cat_query = mysql_query("select * from  airline_details where airline_no = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
		<h3>Your payment of Kshs. <?php echo $row['price_airlineiness']; ?><?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your Ticket NO is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h3><a style="text-decoration:none; margin-left:200px" href="customer_homepage.php">Home</a>
		
		<?php  }  ?>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
        
	</body>
</html>