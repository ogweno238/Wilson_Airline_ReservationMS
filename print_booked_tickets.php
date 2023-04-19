<?php
	session_start();
	if($_SESSION['login_user']==null){
		header('location:index.php');
	}
?>
<html>
	<head>
		<title>
			Welcome Customer
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
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
    
		
        <?php include'navhead_customer.php'?>
			
		<?php
			
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT count(*),frequent_traveler_no,mileage FROM frequent_traveler_details WHERE customer_id=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
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
                            <a href="customer_homepage.php"><i class="icon-home icon-large" style="color:#F00"></i>&nbsp;DASHBOARD
                                  
                            </a>

                        </li>
                        <li>
                        <a href="customer_homepage.php"><i class="fa fa-airline" aria-hidden="true"></i> Book airline Tickets</a>
				
				</li>
				<li><a href="booked_tickets.php"><i class="fa fa-airline" aria-hidden="true"></i> View Booked airline Tickets</a>
				</li>
				<li class="active"><a href="print_booked_tickets.php"><i class="fa fa-airline" aria-hidden="true"></i> Print Booked Ticket</a>
				</li>
				
				
    </ul>
             
             </div> </div>
		
		<div class="span9" style="background-color:#033">
            <div class="hero-unit-3" style="background-color:#033">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;My Tickets</strong>
                        </div>
                       <form action="pnr.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        
                  </div>
                 </div>    
             
        
            
            
                <div  id="divtop">
                    <center>
                        <br> <br><br>
                            <div id="dmain"  > 
                               <center><img src="admin/images/ndege.jpg" width="180px" height="150px" ></center>
                                <br>
                                    <input type="text" id="u_id" name="pnr" class="form-control" style="width:200px; margin-left: 66px;" placeholder="Enter Your Ticket Number"><br>
                                   
                                    <input type="submit" id="u_sub" name="u_sub" value="Print" class="toggle btn btn-primary" style="width:300px; margin-left: 200px;"><br>
                                   
                             </div>
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form>  
        
                </div>
            </div>  
	</body>
</html>

