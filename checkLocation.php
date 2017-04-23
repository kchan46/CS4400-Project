<?php

include 'connect.php';

$Location = $_POST['Location'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zipcode = $_POST['Zipcode'];


mysql_select_db("cs4400_62", $conn);
echo($Location);
echo($City);
echo($State);
echo($Zipcode);
$query = mysql_query("INSERT INTO `POI`(`Location`, `Zipcode`, `DateFlagged`, `Flag`, `CS_City`, `CS_State`) VALUES ('$Location', '$Zipcode', '$City', '$State')", $conn) or trigger_error(mysql_error()." ".$query);

if (mysql_num_rows($query) != 0) {
    header("Location:http://localhost/AddDataPoint.php");
}

?>
