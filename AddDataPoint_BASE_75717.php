<form action="SubmittedDataPoint.php" method="POST">
<center>
<form class="form-horizontal">
<h2><!-- Form Name --></h2>
<h2 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp;Add Data Point &nbsp;</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<!-- Select Basic --></h2>
<div class="form-group" style="text-align: center;">&nbsp;</div>
<div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Poi">POI Location Name</label>
<div class="col-md-4"><select id="Poi" class="form-control" name="Poi">
<option value="1">enter query to get all POI</option>
</select></div>
</div>
<h2><!-- Text input--></h2>
<div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="TimeDate">Time and Date of Data Reading</label>
<div class="col-md-4"><input id="TimeDate" class="form-control input-md" name="TimeDate" required="" type="text" placeholder="mm/dd/yyyy XX:XX" /></div>
</div>
<h2><!-- Select Basic --></h2>
<div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="DataType">Data Type</label>
<div class="col-md-4"><select id="DataType" class="form-control" name="DataType">
<option value="1">Mold</option>
<option value="2">Air Quality</option>
</select></div>
</div>
<h2><!-- Text input--></h2>
<div class="form-group"><label class="col-md-4 control-label" for="DataValue"> Data Value</label>
<div class="col-md-4" style="text-align: center;"><input id="DataValue" class="form-control input-md" name="DataValue" required="" type="text" placeholder="" /></div>
</div>
</form>
<center>

        <p style="text-align: center;"><input type="submit" value="Submit" /> </p>
    </form>

    <form action="Home.php" method="POST">
        <p style="text-align: center;"><input type="submit" value="Log Out" /> </p>
    </form>
