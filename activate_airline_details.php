<?php
	session_start();
?>
<html>
	<head>
		<title>Activate Aircraft</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Activate']))
			{
				$data_missing=array();
				if(empty($_POST['tablet_id']))
				{
					$data_missing[]='airline No.';
				}
				else
				{
					$tablet_id=trim($_POST['tablet_id']);
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="UPDATE tablet_details SET active='Yes' WHERE tablet_id=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"s",$tablet_id);
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
						echo "Successfully Activated";
						header("location: activate_airline.php?msg=success");
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
						header("location: activate_airline.php?msg=failed");
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
				echo "Activate request not received";
			}
		?>
	</body>
</html>