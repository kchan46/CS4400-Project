<?php

include 'connect.php';

 ?>

<<<<<<< HEAD
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
   $( function() {
     $(".datepicker" ).datepicker({
       showOn: "button",
       buttonImage: "images/calendar.gif",
       buttonImageOnly: true,
       buttonText: "Select date",
       dateFormat: "yy-mm-dd"
     });
    // $("input.datepicker").on("keyup change", function(){
    //     var a = prompt("Enter the time as hh-mm-ss", "00-00-00");
    //     var date = $(this).val();
    //     $("input").val(date + " " + a)
    // });
   });
   </script>

 </head>

<h1 style="text-align: center;"><span style="background-color: #ffffff;"><strong>Add New Datapoint</strong></span></h1> <!-- Text input-->

<form action="SubmittedDataPoint.php" method="POST">
=======
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
>>>>>>> 68969150f5fc733fe234ad7d4bf5b9c4f425985a

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