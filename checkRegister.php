<?php

include 'connect.php';



$Username = $_POST['Username'];
$Email = $_POST['EmailAddress'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];
$UserType = $_POST['UserType'];
$City = $_POST['City'];
$State = $_POST['State'];
$Title = $_POST['Title'];


if ($Password != $ConfirmPassword) {
        header("Location:http://localhost/PasswordMismatch.php");
        exit;
}

mysql_select_db("cs4400_62", $conn);
$query = mysql_query("SELECT * FROM `USER` WHERE Username='$Username'", $conn) or trigger_error(mysql_error()." ".$query);

    if (mysql_num_rows($query) != 0) {
        header("Location:http://localhost/RegisterUserExists.php");
        exit;
    }

mysql_select_db("cs4400_62", $conn);
$query = mysql_query("SELECT Email FROM `USER` WHERE Email='$Email'", $conn) or trigger_error(mysql_error()." ".$query);

    if (mysql_num_rows($query) != 0) {
          header("Location:http://localhost/RegisterEmailExists.php");
          exit;
    }

//trying to populate dropdown of cities and states
mysql_select_db("cs4400_62", $conn);
$query = mysql_query("SELECT City, State FROM `CITYSTATE`", $conn);
    if (mysql_num_rows($sql)) {
        $select= '<select name="UserType">';
        while ($result = mysql_fetch_array($query)) {
            echo '<option value="'.$result['City'].'">'.$result['State'].'</option>';
        }
        echo "</select>";
    }

//insert user into User Table and City Official Table
mysql_select_db("cs4400_62", $conn);
$query = mysql_query("INSERT INTO `USER`(`Username`, `Email`, `Password`, `User Type`) VALUES ('$Username', '$Email', '$Password', '$UserType')". $conn) or trigger_error(mysql_error()." ".$query);

    if ($UserType == "City Scientist") {
         header("Location:http://localhost/AddDataPoint.php");
         exit;
    } else {
        $query = mysql_query("INSERT INTO `CITYOFFICAL`(`Username`, `Title`, `Approved`, `CS_City`, `CS_State`) VALUES ('$Username', '$Title', '$City', '$State')". $conn) or trigger_error(mysql_error()." ".$query);
        header("Location:http://localhost/CityOfficial.php");
        exit;
    }

 ?>
