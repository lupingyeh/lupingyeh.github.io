<?php
session_start();
unset($_SESSION["loggeIn"]);

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header( "refresh:0;url=main_login.php" );
?>