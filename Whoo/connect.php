<?php

$host="fall-2015.cs.utexas.edu"; // Host name 
$username="ruoying"; // Mysql username 
$password="+MXOSEMxwh"; // Mysql password 
$db_name="cs329e_ruoying"; // Database name 
$port = "3306";

// Connect to server and select database.
$connection = mysql_connect("$host", "$username", "$password", "$port");
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db("$db_name");
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

?>