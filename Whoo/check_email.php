<?php
//Start the Session
session_start();
//Connect to the database
require('connect.php');

if(isset($_POST["email2check"]) && $_POST["email2check"] != ""){
    
    //Assign posted values to variables
    $email = $_POST['email2check'];
    
    //Prevent SQL injection
    $email = mysql_real_escape_string($email);    

    
    $SQL = "SELECT * FROM members WHERE email='$email'";
    $result = mysql_query($SQL);
    $num_rows = mysql_num_rows($result);
    
    if ($num_rows > 0) {
        echo '<strong>' . $email . '</strong> is already taken!';
	    exit();
    } else {
	    echo '<strong>' . $email . '</strong> is OK!';
	    exit();
    }
}
?>