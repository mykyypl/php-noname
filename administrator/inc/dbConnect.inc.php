<?php
/*$mysql_db_hostname = "Host name";
$mysql_db_user = "UserName";
$mysql_db_password = "Password";
$mysql_db_database = "Database Name";*/

$mysql_db_hostname = "192.168.1.45";
$mysql_db_user = "c1ttest";
$mysql_db_password = "12345";
$mysql_db_database = "c1testt";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");
?>