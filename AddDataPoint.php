<?php

include 'connect.php';

 ?>

<form action="SubmittedDataPoint.php" method="POST">
<center>
<form class="form-horizontal">
<h2><!-- Form Name --></h2>
<h2 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp;Add Data Point &nbsp;</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<!-- Select Basic --></h2>
<div class="form-group" style="text-align: center;">&nbsp;</div>

<div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Poi">POI Location Name</label>
<div class="col-md-4">

    <div id="Poi">
        <select name="Poi">
            <?php
            include 'connect.php';
            //trying to populate dropdown of cities and states
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT Location FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Poi\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result["Poi"].'">'.$result["Poi"].'</option>';
                    }
                }
            ?>
            <option value="City">Enter query to get cities</option>
        </select>
    </div><br>



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
