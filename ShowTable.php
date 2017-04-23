<?php
include 'connect.php';

$Location= $_POST['Location'];
$City = $_POST['CS_City'];
$State = $_POST['CS_State'];
$Zipcode = $_POST['Zipcode'];
$Flagged = $_POST['Flagged'];
$DateFlagged = $_POST['DateFlagged'];
 ?>

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
                            $sql .= "SELECT * FROM `POI` WHERE CS_City='$City'";
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
                            $sql .= "SELECT * FROM `POI` WHERE CS_State='$State'";
                        } else {
                            $sql .= " AND CS_State='$State'";
                        }
                    } else {
                        echo "duck";
                    }

                    if ($Zipcode != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql .= "SELECT * FROM `POI` WHERE Zipcode='$Zipcode'";
                        } else {
                            $sql .= " AND Zipcode='$Zipcode'";
                        }
                    }

                    if ($Flagged != "Choose Here") { //if selected
                        if ($first) {
                            $first = False; //found our first filter
                            $sql .= "SELECT * FROM `POI` WHERE Flag='$Flagged'";
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

<form action="ViewPoi.php" method="POST">
    <p style="text-align: center;"><input type="submit" value="Reset Filter" /> </p>
</form>
