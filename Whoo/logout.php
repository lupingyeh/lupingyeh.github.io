<?php
// Begin the session
session_start();

// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy(); 
//Delete cookie
setcookie("email", "", time() - 3600);

// redirecrt to the login page
header("location: login.html");
?>