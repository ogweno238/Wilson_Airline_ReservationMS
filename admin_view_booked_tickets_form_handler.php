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
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse; 
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			WILSON AIRLINE RESERVATION
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>LIST OF BOOKED TICKETS FOR THE FLIGHT</h2>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['Airline_no']))
				{
					$data_missing[]='Airline No.';
				}
				else
				{
					$Airline_no=trim($_POST['Airline_no']);
				}
				if(empty($_POST['customer_id']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$customer_id=$_POST['customer_id'];
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="SELECT pnr,payment_id,customer_id FROM payment_details where booking_status='CONFIRMED' ";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$customer_id);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$pnr,$payment_id,$customer_id);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<h3>No booked tickets information is available!</h3>";
					}
					else
					{
						echo "<table cellpadding=\"10\"";
						echo "<tr><th>PNR</th>
						<th>Date of Reservation</th>
						<th>Class</th>
						<th>No. of Passengers</th>
						<th>Payment ID</th>
						<th>Customer ID</th>
						</tr>";
						while(mysqli_stmt_fetch($stmt)) {
        					echo "<tr>
							<td>".$pnr."</td>
							<td>".$date_of_reservation."</td>
							<td>".$class."</td>
							<td>".$no_of_passengers."</td>
							<td>".$payment_id."</td>
							<td>".$customer_id."</td>
        					</tr>";
    					}
    					echo "</table> <br>";
    				}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					// else
					// {
					// 	echo "Submit Error";
					// 	echo mysqli_error();
					// }
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>