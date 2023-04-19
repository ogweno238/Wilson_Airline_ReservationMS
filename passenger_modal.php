
<?php
 
require('conn.php');
require_once('admin_users.php');
require_once('functions.php');

?><!-- modal -->

<div id="Signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height:520px;">
    <div class="modal-header">

    </div>
    <div class="modal-body" style="height:860px;">
           
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Passenger Register!</strong>&nbsp;Please Enter the Details Below.
        </div>
         <form class="form-horizontal" action="chkregistration.php" method="post"  name="personal" onSubmit="return validateForm()" >
                        

							<div class="control-group">
                <label class="control-label" for="inputEmail">Full Name</label>
                <div class="controls">
							 	 <input name="name" type="text"  placeholder="fullname" id="last" maxlength="30" />
							</div></div>
                            <script type="text/javascript">
				    var f1 = new LiveValidation('last');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Full Name"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Full name"});
				 </script>

                            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
							 	 <input name="email" placeholder="email" type="text" id="email_id" maxlength="30"  class="form-control input-sm"  />
							</div></div>
                            <script type="text/javascript">
				    var f1 = new LiveValidation('email_id');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script>
                 <div class="control-group">
                <label class="control-label" for="inputEmail">Contact</label>
                <div class="controls">
									 	  <input name="phone_no" type="phone_no" placeholder="phone_no" class="form-control input-sm" id="phone_no" maxlength="11" />
									</div>
								</div>
                                <script type="text/javascript">
				    var f1 = new LiveValidation('phone_no');
					f1.add( Validate.Length, { minimum: 10, maximum: 12 } );
				    f1.add(Validate.Presence,{failureMessage: " Please enter phone_no"});
					
				 </script> 
                 <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
							 	<input name="customer_id"  placeholder="username" type="text" class="form-control input-sm" id="uname" maxlength="10" />
							</div></div>
                            <script type="text/javascript">
				    var f1 = new LiveValidation('uname');
				    f1.add(Validate.Presence,{failureMessage: " Username Cannot be empty"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
					 f1.add( Validate.Length, { minimum: 3, maximum: 10 } );
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Username"});
				 </script>

							<div class="control-group">
                <label class="control-label" for="inputEmail">Password</label>
                <div class="controls">
									 	  <input name="password" type="password" placeholder="password" class="form-control input-sm" id="upass" maxlength="11" />
									</div>
								</div>
                                <script type="text/javascript">
				    var f1 = new LiveValidation('upass');
					f1.add( Validate.Length, { minimum: 6, maximum: 10 } );
				    f1.add(Validate.Presence,{failureMessage: " Please enter Password"});
					
				 </script> 
								<div class="control-group">
                <label class="control-label" for="inputEmail">Confirm Password:</label>
                <div class="controls">
									 	  <input name="rpassword" type="password" placeholder="confirm password" class="form-control input-sm" id="upass" maxlength="11" />
									
								</div>
							</div>
                            <div class="control-group">
                <div class="controls">
                            <input type="checkbox" name="condition" id="condition" value="checkbox" style="width: 13px;" /> I agree the 
                                        <a rel="facebox">terms and condition</a> of this site
			
					 </div></div>
<div class="control-group">
                
                <div class="controls">
							<button type="submit" name="submit" class="btn btn-info">
								Submit
								<span class="glyphicon glyphicon-check"></span>
							</button>	</div>				 
						 </form> 
							

        <!-- teacher -->




    <div class="control-group">
               
                <div class="controls">
        <button style="float:right" class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign icon-large"></i>&nbsp;Close</button>

    </div>
</div

><!-- end modal -->
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