<!--sa poip up-->
<link rel="icon" type="image/png" href="img/logo.png" />
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="admin/lib/jquery.js" type="text/javascript"></script>
<script src="admin/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'admin/src/loading.gif',
      closeImage   : 'admin/src/closelabel.png'
    })
  })
</script>



<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()" style="font-size:20px";>Print</a>|<a href="index.php" style="font-size:20px";>Back</a>
<div class="content" id="content" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal; margin:0 auto;">
<div style="text-align:center;">
<strong style="font-size:14px">Mount Kenya University</strong><br>
<strong>ELECTORAL COLLAGE E-VOTING SYSTEM </strong><br>
<br>
Tel. No. 072-377-7238
</div><br><br>
<link href="css/printvoters.css" media="screen" rel="stylesheet" type="text/css" />
<table>
    	<tr>
            <th>Student ID</th>
            <th> Student Name</th>
            <th>Course</th>
            <th>Year</th>
            <th>Sec / Stage</th>
            
    	</tr>
       <?php
						include('dbconnect.php');
						$result = $db->prepare("SELECT * FROM students ORDER BY studid DESC");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>
        <tr class="record">
						<td><?php echo $row['studid']; ?></td>
                        <td><?php echo $row['name']; ?></td>
						<td><?php echo $row['course']; ?></td>
						<td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['sec']; ?></td>
						
					</tr>
					<?php
						}
					?>
		
    </table>
</div>