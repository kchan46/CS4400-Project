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

  // enter query here to create the User and insert into database
  //then check the userType and redirect to correct page
 ?>
