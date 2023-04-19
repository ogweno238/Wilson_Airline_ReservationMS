<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr,airline_no,booking_status,payment_id, customer_id from payment_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$airline_no= $n['airline_no'];
$class= $n['class'];
$payment_id= $n['payment_id'];
$customer_id= $n['customer_id'];




$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM payment_details WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="cs/bootstrap.css">
         <link rel="stylesheet" href="cs/bootstrap-responsive.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
        <link rel="icon" type="image/png" href="../images/book_bg.png" />
			<link href="cs/bootstrap.css" rel="stylesheet" media="screen">
			<link href="cs/bootstrap-responsive.css" rel="stylesheet" media="screen">
			<link href="cs/docs.css" rel="stylesheet" media="screen">
			<link href="cs/diapo.css" rel="stylesheet" media="screen">
			<link href="cs/font-awesome.css" rel="stylesheet" media="screen">
			<link rel="stylesheet" type="text/css" href="cs/style.css" />
			<link rel="stylesheet" type="text/css" href="cs/DT_bootstrap.css" />
			<link rel="stylesheet" type="text/css" media="print" href="cs/print.css" />
        
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
<center><h3>AIRLINE TICKET RESERVATION</h3></center>



    <body>
<div class="container">
		<div class="margin-top">
			<div class="row">	
								<div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>&nbsp;Valid airline Tickets</strong>
                                </div>

		<div class="span12">	
         
  <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
                               
                               <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                               <div class="pull-right">
								<a href="" onClick="window.print()" class="btn btn-info"> Print</a>
								</div>
								<p><a href="print_booked_tickets.php" class="btn btn-success">&nbsp;Print Another Ticket</a> <a href="customer_homepage.php" class="btn btn-primary">&nbsp;home</a></p>
                               
							

                                <thead>
                                    <tr>
                       
                                        <th>Ticket No.</th>                                 
                                        <th>Payment ID</th>                                 
                                        <th>Passenger</th>
										<th>DP Date</th>
                                        <th>Arrival Date</th>
                                        <th>FROM</th>
                                        <th>TO</th>
										<th>airline NO</th>
										<th>Amount:</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                <?php include('dbcon.php'); ?>
                                 <?php  $user_query=mysql_query("select * from payment_details where customer_id='".$_SESSION['login_user']."'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['airline_no'];  
									$cat_id=$row['airline_no'];

											$cat_query = mysql_query("select * from 	airline_details where airline_no = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['pnr']; ?></td>
                                    <td><?php echo $row['payment_id']; ?></td>
                                    <td><?php echo $row['customer_id']; ?></td>
									<td><?php echo $cat_row ['departure_date']; ?> </td> 
                                    <td><?php echo $cat_row ['arrival_date']; ?> </td> 
                                    
									<td><?php echo $cat_row ['from_city']; ?> </td> 
                                    <td><?php echo $cat_row ['to_city']; ?> </td> 
                                    <td><?php echo $row['airline_no']; ?> </td> 
									 <td><?php echo $row['payment_amount']; ?></td>
									
                                    
									
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
      
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
    
    </body>
</html>


 
            
    </body>
</html>


                     