<?php
include 'connect.php';
 ?>

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



<form action="ShowTable.php" method="POST">
<h2 style="text-align: center;"><span style="color: #0000ff;"><strong>View POIs</strong></span></h2>

<center>
    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Location">POI Location Name: </label>
        <select name="Location">
            <option value="Choose Here">Choose here</option>
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Location FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Location\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['Location'].'">'.$result['Location'] . '</option>';
                    }
                }
            ?>
            <option value="Location"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="CS_City">City: </label>

        <select name="CS_City">
            <option value="Choose Here">Choose here</option>
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT CS_City FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"CS_City\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['CS_City'].'">'.$result['CS_City'] . '</option>';
                    }
                }
            ?>
            <option value="CS_City"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="CS_State">State: </label>
        <select name="CS_State">
            <option value="Choose Here">Choose here</option>
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT CS_State FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"CS_State\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['CS_State'].'">'.$result['CS_State'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="CS_State"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Zipcode">Zipcode: </label>
        <select name="Zipcode">
            <option value="Choose Here">Choose here</option>
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Zipcode FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Zipcode\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['Zipcode'].'"">'.$result['Zipcode'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="Zipcode"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Flagged">Flagged? </label>
        <select name="Flagged">
            <option value="Choose Here">Choose here</option>
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Flagged FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Flagged\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['Flagged'].'">'.$result['Flagged'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="Flagged"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="DateFlagged">Date Flagged? </label>
        <select name="DateFlagged">
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT DateFlagged FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"DateFlagged\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['DateFlagged'].'">'.$result['DateFlagged'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="DateFlagged"></option>
        </select>
    </div><br>


    <p style="text-align: center;"><input type="submit" value="Apply Filter" /> </p>
</form>

<form action="ViewPoi.php" method="POST">
    <p style="text-align: center;"><input type="submit" value="Reset Filter" /> </p>
</form>
