
<?php 

include('../includes/dbcon.php');
	
	    $studid = $_POST['studid'];
        $name = $_POST['name'];
        $platform = $_POST['platform'];
        $position = $_POST['position'];
        $course = $_POST['course'];
        $year = $_POST['year'];

	$result = mysqli_query($con,"SELECT studid FROM candidate where studid='$studid'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {

			$image = $_FILES["image"]["name"];
		 if ($image=="")
		 {
			$names=$_POST['image']; 
		 }
		else
		{
			$names = $_FILES["image"]["name"];
			$type = $_FILES["image"]["type"];
			$size = $_FILES["image"]["size"];
			$temp = $_FILES["image"]["tmp_name"];
			$error = $_FILES["image"]["error"];
			
				if ($error > 0){
					die("Error uploading file! Code $error.");
					}
				else{
					if($size > 100000000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
				else
					  {
					move_uploaded_file($temp, "pictures/".$names);
					  }
					}
		}
				mysqli_query($con,"INSERT INTO candidate(studid,name,platform,position,course,year,picture) 
					VALUES('$studid','$name','$platform','$position','$course','$year','$names')")or die(mysqli_error());  
					echo "<script type='text/javascript'>alert('Successfully added new Candidate!');</script>";
					echo "<script>document.location='index.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('Candidate already added!');</script>";
					echo "<script>document.location='index.php'</script>";  
		}	
?>