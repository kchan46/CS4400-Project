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

//Check city and state are in the same
// echo "State: $State\n";
$tempQ = mysql_fetch_array(mysql_query("SELECT * FROM `CITYSTATE` WHERE City='$City'", $conn));
// echo "Hello $tempQ[State]";
if($State == $tempQ[State]) {
    $query = mysql_query("INSERT INTO `POI`(`Location`, `Zipcode`, `DateFlagged`, `Flag`, `CS_City`, `CS_State`) VALUES ('$Location', '$Zipcode', NULL, NULL, '$City', '$State')", $conn) or trigger_error(mysql_error()." ".$query);

    echo "Query: $query\n";
    echo "Result: mysql_num_rows($query)\n"; 

    if ($query == 1) {
        header("Location:http://localhost/AddDataPoint.php");
    }
}
// } else {
//     header("Location:http://localhost/LocationError.php");
// }

?>
