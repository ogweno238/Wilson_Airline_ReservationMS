	<div id="add_house" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body" style="height:400px;">
			<div class="alert alert-success">Add Tenant</div>
            <form class="form-horizontal" method="POST" action="tenant_save.php" enctype="multipart/form-data">
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">First Name:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Last Name</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="firstname"  placeholder="firstname" required>
            <input type="text" class="span4" id="inputEmail" name="lastname"  placeholder="lastname" required>
			</div>
		</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Gender</label>
			<div class="controls">
			<select name="gender">
			<option></option>
			<option value="Male">Male</option>
            <option value="Female">Female</option>
			
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Address: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  Cotact</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="address"  placeholder="address" required>
    <input type="text"  class="span4" id="inputPassword" name="contact"  placeholder="contact" required>
			</div>
		</div>
        <div class="control-group"><label class="control-label" for="inputPassword">National Identification No:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="IDNO"  placeholder="id numbers" required> &nbsp;&nbsp;&nbsp;&nbsp;
            <button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>	
		<div class="control-group">
			<div class="controls">
			
			</div>
		</div>
    </form>					


		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
