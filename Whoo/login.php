<?php
//Start the Session
session_start();
//Connect to the database
require('connect.php');

//If the form is submitted or not.
//If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
    
    //Assign posted values to variables.
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Prevent SQL injection
    $email = mysql_real_escape_string($email);    
    $password = mysql_real_escape_string($password);
    
    //Checking the values are existing in the database or not
    $query = "SELECT * FROM members WHERE email='$email' and password='$password'";
    $result = mysql_query($query) or die(mysql_error());
    $count = mysql_num_rows($result);
    
    //If the posted values are equal to the database values
    if ($count == 1){
        //Session will be created for the user
        $_SESSION['email'] = $email;
        setcookie("email", $email, time() + (86400 * 30), "/");
        //Go to the homepage
        header("location: homepage.php");
    }else{
        //If the login credentials doesn't match, he will be shown with an error message.
        $message = "Your Login Name or Password is invalid";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0; URL=./login.html');
    }
}

?>