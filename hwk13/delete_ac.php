<html>
   
   <head>
      <title>Delete</title>
   </head>
   
   <body>

<?php

$host="fall-2015.cs.utexas.edu"; // Host name 
$username="luping"; // Mysql username 
$password="tsxTM9KCGY"; // Mysql password 
$db_name="cs329e_luping"; // Database name 
$tbl_name="STUDENTS"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$id=$_POST['id'];

// Insert data into mysql 
$sql="DELETE FROM $tbl_name WHERE ID='$id'";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='delete.php'>Back to delete page</a>";
echo "<BR>";
echo "<a href='action.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>

       
