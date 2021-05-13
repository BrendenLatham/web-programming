<?php
//Define host here.
$hostname = "localhost";

//Define database username here.
$username = "bdsjgrku_email";

//Define database password here.
$password = "email@travelspotsbystate";

//Define database name here.
$dbname = "bdsjgrku_email";

  //this connects our php to our sql database
  //the @ before "mysql_connect()" is to eliminate the error message because I am using php 5.4
$conn = @mysql_connect($hostname, $username, $password);

 //and if we can't connect our script dies and errors out.
 if (!$conn)

 {

 die('Could not connect: ' . mysql_error());

 }
 mysql_select_db($dbname, $conn);
?>
