<?php
include 'connect.php';

$Location= $_POST['Location'];
$City = $_POST['CS_City'];
$State = $_POST['CS_State'];
$Zipcode = $_POST['Zipcode'];
$Flagged = $_POST['Flagged'];
$DateFlagged = $_POST['DateFlagged'];
 ?>


<form action="ShowTable.php" method="POST">
<h2 style="text-align: center;"><span style="color: #0000ff;"><strong>View POIs</strong></span></h2>


<center>
    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Location">POI Location Name: </label>
        <select name="Location">
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Location FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Location\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value=\"Location\">'.$result['Location'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="Location"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="CS_City">City: </label>
        <select name="CS_City">
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT CS_City FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"CS_City\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value=\"CS_City\">'.$result['CS_City'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="CS_City"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="CS_State">State: </label>
        <select name="CS_State">
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT CS_State FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"CS_State\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value=\"CS_State\">'.$result['CS_State'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="CS_State"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Zipcode">Zipcode: </label>
        <select name="Zipcode">
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Zipcode FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Zipcode\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value=\"Zipcode\">'.$result['Zipcode'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="Zipcode"></option>
        </select>
    </div><br>

    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Flagged">Flagged? </label>
        <select name="Flagged">
            <?php
            include 'connect.php';
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Flagged FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Flagged\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value=\"Flagged\">'.$result['Flagged'] . '</option>';
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
                        echo '<option value=\"DateFlagged\">'.$result['DateFlagged'] . '</option>';
                    }
                }
            ?>
            <option selected enabled>Choose here</option>
            <option value="DateFlagged"></option>
        </select>
    </div><br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Filter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</head>
<body>
     <table id="table_format" class="table table-bordered table-striped table-hover table-list-search">
        <thead>
            <tr>
                <th>Location</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Flagged?</th>
                <th>Date Flagged</th>
                <th>View POI</th>
            </tr>
        </thead>
        <tbody  id="myTable">
            <tr class="content">
                <?php
                    include "connect.php";
                    mysql_select_db("cs4400_62", $conn);
                    $first = True;
                    $sql = "";
                    //$sql = "SELECT * FROM `POI` ";

                    if ($Location != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql = "SELECT * FROM `POI` WHERE Location='$Location'";
                            echo "Hello world!<br>";
                        } else {
                            $sql .= " AND Location='$Location'";
                            echo "Bye world!<br>";
                        }
                    } else {
                        echo "Ugle world!<br>";
                    }

                    if ($City != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql .= " WHERE CS_City='$City'";
                            echo "omg kms";
                        } else {
                            $sql .= " AND CS_City='$City'";
                            echo "huehuehue";
                        }
                    } else {
                        echo "duck";
                    }

                    if ($State != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql .= " WHERE CS_State='$State'";
                        } else {
                            $sql .= " AND CS_State='$State'";
                        }
                    } else {
                        echo "duck";
                    }

                    if ($Zipcode != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql .= " WHERE Zipcode='$Zipcode'";
                        } else {
                            $sql .= " AND Zipcode='$Zipcode'";
                        }
                    }

                    if ($Flagged != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql .= " WHERE Flag='$Flagged'";
                        } else {
                            $sql .= " AND Flag='$Flagged'";
                        }
                    } else {
                        echo "duck";
                    }

                    //ADD DATE FILTER

                    $result = mysql_query($sql, $conn) or trigger_error(mysql_error()." ".$query);
                    if (mysql_num_rows($result) > 0){
                    // output data of each row
                    while($rows = mysql_fetch_array($result)){ ?>
                        <tr>
                        <td><?php echo $rows['Location']; ?></td>
                        <td><?php echo $rows['CS_City']; ?></td>
                        <td><?php echo $rows['CS_State']; ?></td>
                        <td><?php echo $rows['Zipcode']; ?></td>
                        <td><?php echo $rows['Flag']; ?></td>
                        <td><?php echo $rows['DateFlagged']; ?></td>
                        <td align="center"><form action="ViewOnePoi.php" method="POST">
                            <p style="text-align: center;"><input type="submit" value="View" /> </p>
                        </form></td>
                        </tr>
                        <?php
                    }
                    }
                ?>
            </tr>
        </tbody>
                </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>

    <p style="text-align: center;"><input type="submit" value="Apply Filter" /> </p>
</form>

<form action="ViewPoi.php" method="POST">
    <p style="text-align: center;"><input type="submit" value="Reset Filter" /> </p>
</form>
