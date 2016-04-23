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
    session_start();
    $_SESSION["loggedIn"] = $username;
      echo $_SESSION["loggedIn"];
    header( "refresh:2;url=action.php" );

  }
  else {
    echo "Log in failed!You will be redirected in 3 seconds.";
    header( "refresh:3;url=main_login.php" );
  }
?>