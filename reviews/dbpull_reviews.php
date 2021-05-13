<?php
$hostname = "localhost";
$username = "bdsjgrku_reviews";
$password = "reviews@travelspotsbystate";
$dbname = "bdsjgrku_reviews";
// another @ before "mysql_connect($hostname, $username, $password);" because I am working with php 5.4"
@mysql_connect($hostname, $username, $password);
@mysql_select_db($dbname) or die( "Unable to select database");
$query = "SELECT * FROM review_table";
$result = mysql_query($query);
mysql_close();
?>
