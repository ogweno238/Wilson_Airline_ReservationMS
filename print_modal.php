
<?php
 
require('conn.php');
require_once('admin_users.php');
require_once('footer.php');

?><!-- modal -->

<div id="mission" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    </div>
    <div class="modal-body" style="height:490px;">
           
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Wilson airline</strong>&nbsp;Please Enter the Details Below.
        </div>
      <form id="index" action="pnr.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        
                  </div>
                 </div>    
             
        
            
            
                <div  id="divtop">
                    <center>
                        <br> <br><br>
                            <div id="dmain"  > 
                               <center><img src="./images/irctc.jpg" width="180px" height="150px" ></center>
                                <br>
                                    <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your PNR Number"><br>
                                   
                                    <input type="submit" id="u_sub" name="u_sub" value="Print" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;"><br>
                                   
                             </div>
                             
                              </div>
    <div class="control-group">
               
                <div class="controls">
        <button style="float:right" class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign icon-large"></i>&nbsp;Close</button>
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form>  
							

        <!-- teacher -->




   

    </div>
</div><!-- end modal -->
 <script type="text/javascript">
function validateForm()
{
if (document.personal.condition.checked == false)
{
alert ('pls. agree the term and condition of this site');
return false;
}
else
{
return true;
}
}
</script>