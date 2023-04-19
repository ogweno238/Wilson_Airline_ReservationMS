<?php
	session_start();
?>
<html>
	<head>
		<title>Add airline Schedule Details</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['airline_no']))
				{
					$data_missing[]='airline No.';
				}
				else
				{
					$airline_no=trim($_POST['airline_no']);
				}

				if(empty($_POST['origin']))
				{
					$data_missing[]='Origin';
				}
				else
				{
					$origin=$_POST['origin'];
				}
				if(empty($_POST['destination']))
				{
					$data_missing[]='Destination';
				}
				else
				{
					$destination=$_POST['destination'];
				}

				if(empty($_POST['dep_date']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$dep_date=$_POST['dep_date'];
				}
				if(empty($_POST['arr_date']))
				{
					$data_missing[]='Arrival Date';
				}
				else
				{
					$arr_date=$_POST['arr_date'];
				}
				
				if(empty($_POST['dep_time']))
				{
					$data_missing[]='Departure Time';
				}
				else
				{
					$dep_time=$_POST['dep_time'];
				}
				if(empty($_POST['arr_time']))
				{
					$data_missing[]='Arrival Time';
				}
				else
				{
					$arr_time=$_POST['arr_time'];
				}

				if(empty($_POST['seats_eco']))
				{
					$data_missing[]='Seats(Economy)';
				}
				else
				{
					$seats_eco=$_POST['seats_eco'];
				}
				if(empty($_POST['seats_airline']))
				{
					$data_missing[]='Seats(airlineiness)';
				}
				else
				{
					$seats_airline=$_POST['seats_airline'];
				}

				if(empty($_POST['price_eco']))
				{
					$data_missing[]='Price(Economy)';
				}
				else
				{
					$price_eco=$_POST['price_eco'];
				}
				if(empty($_POST['price_airline']))
				{
					$data_missing[]='Price(airlineiness)';
				}
				else
				{
					$price_airline=$_POST['price_airline'];
				}

				if(empty($_POST['tablet_id']))
				{
					$data_missing[]='Tablet ID';
				}
				else
				{
					$tablet_id=$_POST['tablet_id'];
				}

				if(empty($data_missing))
				{
					$cnt=-1;
					require_once('Database Connection file/mysqli_connect.php');

					$query="SELECT count(*) FROM tablet_details WHERE tablet_id=? and active='Yes'";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"s",$tablet_id);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$cnt);
					mysqli_stmt_fetch($stmt);
					mysqli_stmt_close($stmt);

					if($cnt==1)
					{
						$query="INSERT INTO airline_details(airline_no,from_city,to_city,departure_date,arrival_date,departure_time,arrival_time,seats_economy,seats_airlineiness,price_economy,price_airlineiness,tablet_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"sssssssiiiis",$airline_no,$origin,$destination,$dep_date,$arr_date,$dep_time,$arr_time,$seats_eco,$seats_airline,$price_eco,$price_airline,$tablet_id);
						mysqli_stmt_execute($stmt);
						$affected_rows=mysqli_stmt_affected_rows($stmt);
						mysqli_stmt_close($stmt);
					}
					else
					{
						$affected_rows=0;
					}
					mysqli_close($dbc);
					if($affected_rows==1)
					{
						echo "Successfully Submitted";
						header("location: add_airline_shedule.php?msg=success");
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
						header("location: add_airline_shedule.php?msg=failed");
					}
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