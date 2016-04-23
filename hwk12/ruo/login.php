<?php
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  $found = false;
  $graded = false;
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

  $file2 = fopen("score.txt", "rb") or die("Unable to open file!");
    while (!feof($file2) ) {
    $line_of_text2 = fgets($file2);
    $parts = explode(':', $line_of_text2);
      if (trim($parts[0]) == $username)
    {
      $graded = true;
      break;
    }
  }
  fclose($file2);
  
  if ($found == true && $graded == false)
  {
    //setcookie("loggedIn", $username, time()+120);
    session_start();
    $_SESSION["score"] = 0;
    $_SESSION["username"] = $_POST["username"];

    $time = time();
    $_SESSION['time_started'] = $time;
      
    header("Location: ./question1.html");
  }elseif($found == true && $graded == true){
      echo "You already have a score.";
  }
  else {
    echo "User name and password does not match! You will be redirected in 5 seconds.";
    header( "refresh:5;url=login.html" );
  }

?>