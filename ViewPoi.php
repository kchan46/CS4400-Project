<?php
include 'connect.php';
 ?>

<h2 style="text-align: center;"><span style="color: #0000ff;"><strong>View POIs</strong></span></h2>



<center>
<form class="form-horizontal">

<div class="col-md-4"><select id="Location" class="form-control" name="Location">
<option value="1">Option One</option>
</select></div>
<h4><!-- Select Basic --></h4>
<h4 class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="City">City</label></h4>
<div class="col-md-4"><select id="City" class="form-control" name="City">
<option value="1">Option one</option>
</select></div>
<h4><!-- Select Basic --></h4>
<h4 class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="State">State</label></h4>
<div class="col-md-4"><select id="State" class="form-control" name="State">
<option value="1">Option one</option>
</select></div>
<h4><!-- Text input--></h4>
<h4 class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="ZipCode">Zip Code</label></h4>
<div class="col-md-4"><input id="ZipCode" class="form-control input-md" name="ZipCode" required="" type="text" placeholder="" /></div>
<h4><!-- Multiple Checkboxes --></h4>
<div class="form-group">

<div class="col-md-4">
<h4 class="checkbox" style="text-align: center;"><label for="Flagged-0"> <input id="Flagged-0" name="Flagged" type="checkbox" value="1" /> Flagged? </label></h4>
</div>
</div>
</fieldset></form>
