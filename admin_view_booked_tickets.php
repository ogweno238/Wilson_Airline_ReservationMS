<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
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
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body><?php include'navhead_admin.php'?>
     <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div>
                    <ul class="nav  nav-pills nav-stacked" style="background-color:#C96">
                        
                        <li>
                            <a href="admin_homepage.php"><i class="icon-home icon-large" style="color:#F00"></i>&nbsp;DASHBOARD
                                  
                            </a>

                        </li>
                        <li  class="active">
                        <a href="admin_view_booked_tickets.php"><i class="fa fa-Airline" aria-hidden="true"></i> View List of Booked Tickets</a>
				
				</li>
                
                <li><a href="add_Airline.php"><i class="fa fa-Airline" aria-hidden="true"></i> Add Airline </a>
				</li>
				<li><a href="add_Airline_shedule.php"><i class="fa fa-Airline" aria-hidden="true"></i> Add Airline Schedule</a>
				</li>
				<li><a href="delete_Airline.php"><i class="fa fa-Airline" aria-hidden="true"></i> Delete Airline Schedule</a>
				</li>
                <li><a href="activate_Airline.php"><i class="fa fa-Airline" aria-hidden="true"></i> Restore Airline Schedule</a>
				</li>
                </ul>
                </div>
                </div>
                    
        
        <div class="span9" style="background-color:#033">
            <div class="hero-unit-3" style="background-color:#033">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;DEACTIVATE Airline</strong>
                        </div>
                               
                               <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                               <div class="pull-right">
								<a href="" onClick="window.print()" class="btn btn-info"> Print</a>
								</div>
								
                               
							

                                <thead>
                                    <tr>
                       
                                        <th>Ticket No.</th>                                 
                                        <th>Payment ID</th>                                 
                                        <th>Passenger</th>
										<th>DP Date</th>
                                        <th>Arrival Date</th>
                                        <th>FROM</th>
                                        <th>TO</th>
										<th>Airline NO</th>
										<th>Amount:</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                <?php include('dbcon.php'); ?>
                                 <?php  $user_query=mysql_query("select * from payment_details")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['Airline_no'];  
									$cat_id=$row['Airline_no'];

											$cat_query = mysql_query("select * from 	Airline_details where Airline_no = '$cat_id'")or die(mysql_error());
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
                                    <td><?php echo $row['Airline_no']; ?> </td> 
									 <td><?php echo $row['payment_amount']; ?></td>
									
                                    
									
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
      
                               </div>
                            </div>
            </div>
        
	</body>
</html>