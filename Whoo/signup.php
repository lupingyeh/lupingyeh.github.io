<?php
//Start the Session
session_start();
//Connect to the database
require('connect.php');

//If the form is submitted or not.
//If the form is submitted
if (isset($_POST['newemail']) and isset($_POST['newpassword'])){
    //Assign posted values to variables
    $newemail = $_POST['newemail'];
    $newpassword = $_POST['newpassword'];
    
    //Prevent SQL injection
    $newemail = mysql_real_escape_string($newemail);    
    $newpassword = mysql_real_escape_string($newpassword);
    
    $SQL = "SELECT * FROM members WHERE email='$newemail'";
    $result = mysql_query($SQL);
    $num_rows = mysql_num_rows($result);

    if ($num_rows > 0) {
        $message = "Your email has already exists, please sign in!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0; URL=./login.html'); 
    } 
    else { 
        //If the email is not in the database, create new member and go to the homepage
        $sql = "INSERT INTO members(email,password) VALUES('$newemail','$newpassword')"; 
        $data = mysql_query ($sql)or die(mysql_error()); 
        if($data) {
        //Session is created for the user
        $_SESSION['email'] = $newemail;
        setcookie("email", $email, time() + (86400 * 30), "/");
        $message = "Sign up successful, enjoy!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0; URL=./homepage.php'); 
        }

    }

}

?>