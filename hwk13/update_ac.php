<html>
   
   <head>
      <title>Update Data in MySQL Database</title>
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
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$major=$_POST['major'];
$gpa=$_POST['gpa'];

// Update data in mysql 
$sql="UPDATE $tbl_name SET LAST='$lastname', FIRST='$firstname', MAJOR='$major', GPA='$gpa' WHERE ID='$id'";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='update.php'>Back to update page</a>";
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

       
