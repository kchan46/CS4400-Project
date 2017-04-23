<?php
include 'connect.php';

$Location= $_POST['Location'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zipcode = $_POST['Zipcode'];
$Flagged = $_POST['Flagged'];
$DateFlagged = $_POST['DateFlagged'];
 ?>


<form action="ShowTable.php" method="POST">
<h2 style="text-align: center;"><span style="color: #0000ff;"><strong>View POIs</strong></span></h2>



<center>
<p>POI Location Name:</p>
    <select name="Location">
        <?php
            include 'connect.php';
            //trying to populate dropdown of cities and states
            mysql_select_db("cs4400_62", $conn);
            $query = mysql_query("SELECT DISTINCT Location FROM `POI`", $conn);
                if (mysql_num_rows($query)) {
                    $select= '<select name=\"Location\">';
                    while ($result = mysql_fetch_array($query)) {
                        echo '<option value="'.$result['Location'].'">'.$result['Location'] . '</option>';
                    }
                }
            ?>

    </select>

    <p>City:</p>
        <select name="City">
            <?php
                include 'connect.php';
                //trying to populate dropdown of cities and states
                mysql_select_db("cs4400_62", $conn);
                $query = mysql_query("SELECT DISTINCT CS_City FROM `POI`", $conn);
                    if (mysql_num_rows($query)) {
                        $select= '<select name=\"CS_City\">';
                        while ($result = mysql_fetch_array($query)) {
                            echo '<option value="'.$result['CS_City'].'">'.$result['CS_City'] . '</option>';
                        }
                    }
                ?>

        </select>


        <p>POI State:</p>
            <select name="State">
                <?php
                    include 'connect.php';
                    //trying to populate dropdown of cities and states
                    mysql_select_db("cs4400_62", $conn);
                    $query = mysql_query("SELECT DISTINCT CS_State FROM `POI`", $conn);
                        if (mysql_num_rows($query)) {
                            $select= '<select name=\"State\">';
                            while ($result = mysql_fetch_array($query)) {
                                echo '<option value="'.$result['CS_State'].'">'.$result['CS_State'] . '</option>';
                            }
                        }
                    ?>

            </select>


            <p>Zip Code:</p>
                <select name="Zipcode">
                    <?php
                        include 'connect.php';
                        //trying to populate dropdown of cities and states
                        mysql_select_db("cs4400_62", $conn);
                        $query = mysql_query("SELECT DISTINCT Zipcode FROM `POI`", $conn);
                            if (mysql_num_rows($query)) {
                                $select= '<select name=\"Zipcode\">';
                                while ($result = mysql_fetch_array($query)) {
                                    echo '<option value="'.$result['Zipcode'].'">'.$result['Zipcode'] . '</option>';
                                }
                            }
                        ?>

                </select>

                <p>Flagged?:</p>
                    <select name="Flagged">
                        <?php
                            include 'connect.php';
                            //trying to populate dropdown of cities and states
                            mysql_select_db("cs4400_62", $conn);
                            $query = mysql_query("SELECT DISTINCT Flag FROM `POI`", $conn);
                                if (mysql_num_rows($query)) {
                                    $select= '<select name=\"Flag\">';
                                    while ($result = mysql_fetch_array($query)) {
                                        echo '<option value="'.$result['Flag'].'">'.$result['Flag'] . '</option>';
                                    }
                                }
                            ?>

                    </select>

                <p>Date:</p>
                    <select name="DateFlagged">
                        <?php
                            include 'connect.php';
                            //trying to populate dropdown of cities and states
                            mysql_select_db("cs4400_62", $conn);
                            $query = mysql_query("SELECT DISTINCT DateFlagged FROM `POI`", $conn);
                                if (mysql_num_rows($query)) {
                                    $select= '<select name=\"Location\">';
                                    while ($result = mysql_fetch_array($query)) {
                                        echo '<option value="'.$result['DateFlagged'].'">'.$result['DateFlagged'] . '</option>';
                                    }
                                }
                            ?>

                    </select>


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

                                                $result = mysql_query("SELECT * FROM `POI` WHERE Location='$Location' AND CS_City='$City'", $conn);
                                if(mysql_num_rows($result) > 0){
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



                        <p style="text-align: center;"><input type="submit" value="Apply Fitler" /> </p>
                    </form>

                    <form action="ViewPoi.php" method="POST">
                        <p style="text-align: center;"><input type="submit" value="Reset Filter" /> </p>





                    </form>
