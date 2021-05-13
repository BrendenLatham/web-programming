<!--php from https://www.android-examples.com/create-php-comment-box-using-mysql-database and adjusted for our needs-->
<!--this script configurates our php to send to our comment database-->
<?php
//Define host here.
$hostname = "";

//Define database username here.
$username = "";

//Define database password here.
$password = "";

//Define database name here.
$dbname = "";

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
