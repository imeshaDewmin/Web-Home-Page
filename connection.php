<?php
$Servername="localhost";
$Username="root";
$Password="";
$Database="webdetails";

$con = mysqli_connect($Servername,$Username,$Password,$Database);

if($con)
{
    echo "";
}
else
{
    echo "Connection failed".mysql_error();
}

/*
 $DB="CREATE DATABASE webdetails;";

 $DBcreation=mysqli_query($con,$DB);

 if($DBcreation)
 {
     echo "Database created successfull";
 }
 else
 {
     echo "Database creation failed";
 }
 */
/*
 $usedb="USE webdetails;";
 mysqli_query($con,$usedb);

$table="CREATE TABLE details(firstname varchar(10),lastname varchar(10),email varchar(30),phonenumber varchar(10)primary key,comment varchar(100));";

if(mysqli_query($con,$table))
{
    echo "table created ";
}
else
{
    echo "table creation failed".mysqli_error();
}
*/
?>