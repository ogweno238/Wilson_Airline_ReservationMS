
<?php

	session_start();
?>
<!-- modal -->

<div id="driver" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    </div>
    <div class="modal-body">
          
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Passenger Login!</strong>&nbsp;.
        </div>
        <form class="form-horizontal" method="post" action="login_handler.php">
        <?php
								?>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
                    <input type="text" name="username" id="inputEmail" placeholder="username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                
                <div class="controls">
                    <input type='hidden' name='user_type' value='Customer' checked/> 
                </div>
            </div>
               <?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="Login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                </div>


            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign icon-large"></i>&nbsp;Close</button>

    </div>
</div>
<!-- end modal -->
<div id="chk" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    </div>
    <div class="modal-body">
          
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>PNR Checker</strong>&nbsp;Please Enter the Details Below.
        </div>
        <form id="index" action="pnrall.php" method="post">
            <div class="control-group">
                <label class="control-label" for="inputEmail"></label>
                <div class="controls">
                  <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your PNR Number">           
                </div>
            </div>
           <div class="control-group">
                <div class="controls">
                <button  type="submit" id="u_sub" name="u_sub" value="Check"  class="toggle btn btn-primary" style="width:100px; margin-left: 70px;"><i class="icon-signin icon-large"></i>&nbsp;Check</button>
                    
                </div>


            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign icon-large"></i>&nbsp;Close</button>

    </div>
</div>
<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
 
 }
}
?>
