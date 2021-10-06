<?php
include_once 'connection.php';

$Firstname=$_POST['fname'];
$Lastname=$_POST['lname'];
$Email=$_POST['eml'];
$Phonenumber=$_POST['pnumber'];
$Comment=$_POST['cmnt'];

$INSERT="INSERT INTO details VALUES('$Firstname','$Lastname','$Email','$Phonenumber','$Comment');";

if(mysqli_query($con,$INSERT))
{
    echo "Thank You!";
}
else
{
    echo "Value insertion failed".mysqli_errror();
}
?>