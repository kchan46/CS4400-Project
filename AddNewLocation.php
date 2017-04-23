<?php

include 'connect.php';

 ?>

<h1 style="text-align: center;"><span style="background-color: #ffffff;"><strong>Add a new location</strong></span></h1>

<form action="SubmittedLocation.php" method="POST">

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="POI">POI Location Name: </label>
        <select name="POI">
            <?php
            include 'connect.php';
            //trying to populate dropdown of cities and states
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT Location FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"POI\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value=\"POI\">'.$result['Location'] . '</option>';
                    }
                }
            ?>
            <option value="POI"></option>
        </select>
        <a href="AddNewLocation.php">Add a new location</a>
    </div><br>

    <div class="form-group" style="text-align: center;">
        <p>Date of Reading: </p>
        <input type="text" class="datepicker">
        <p>Time of Reading: </p><div class="yo" style="text-align: center;"><input id="Time" class="form-control input-md" name="Time" required="" type="text" placeholder="hh-mm" /></div>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="DataType">Data Type: </label>
            <select id="DataType" class="form-control" name="DataType">
                <option value="1">Mold</option>
                <option value="2">Air Quality</option>
            </select>
        </div>
    <br>

    <div class="form-group" style="text-align: center;"><label class="control-label" for="DataValue">Data Value: </label>
        <div class="yo" style="text-align: center;"><input id="DataValue" class="form-control input-md" name="DataValue" required="" type="text" placeholder="" /></div>
    </div><br>

    </form>

<p style="text-align: center;"><input type="submit" value="Submit" /> </p>

<form action="Home.php" method="POST">
    <p style="text-align: center;"><input type="submit" value="Log Out" /> </p>
</form>
