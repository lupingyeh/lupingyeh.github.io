<?php
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  $found = false;
  $file = fopen("passwd", "rb") or die("Unable to open file!");
  while (!feof($file) ) {
    $line_of_text = fgets($file);
    $parts = explode(':', $line_of_text);
      if (trim($parts[0]) == $username and trim($parts[1]) == $password)
    {
      $found = true;
      break;
    }
  }

  fclose($file);
  if ($found == true)
  {
    setcookie("logging", $username, time()+120);
    header("Location: hwk11.php");
  }
  else {
    echo "User does not exist, please Sign Up!You will be redirected in 3 seconds.";
    header( "refresh:3;url=login_signup.html" );
  }
  
?>