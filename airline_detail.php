<?php
	session_start();
?>
<html>
	<head>
		<title>Add Airline | Wilson </title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['tablet_id']))
				{
					$data_missing[]='Airline ID';
				}
				else
				{
					$tablet_id=trim($_POST['tablet_id']);
				}

				if(empty($_POST['tablet_type']))
				{
					$data_missing[]='Airline Type';
				}
				else
				{
					$tablet_type=$_POST['tablet_type'];
				}

				if(empty($_POST['total_capacity']))
				{
					$data_missing[]='Airline Capacity';
				}
				else
				{
					$total_capacity=$_POST['total_capacity'];
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="INSERT INTO tablet_Details (tablet_id,tablet_type,total_capacity,active) VALUES (?,?,?,'Yes')";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ssi",$tablet_id,$tablet_type,$total_capacity);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					//echo $affected_rows."<br>";
					// mysqli_stmt_bind_result($stmt,$cnt);
					// mysqli_stmt_fetch($stmt);
					// echo $cnt;
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						echo "Successfully Submitted";
						header("location: add_Airline.php?msg=success");
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
						header("location: add_Airline.php?msg=failed");
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