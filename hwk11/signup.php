<?php
  $username = trim($_POST["username_new"]);
  $password = trim($_POST["password_new"]);
  $file = fopen("passwd", "rb") or die("Unable to open file!");
  $unique = true;

  while(!feof($file))
  {
    $line_of_text = fgets($file);
    $parts = explode(':', $line_of_text);
    if ($parts[0] == $username)
    {
      $unique = false;
      break;
    }
    $line = fgets($file);
  }
  fclose($file);
  if (!$unique)
  {
    echo "This username has already been taken. Please use another one!";
    header( "refresh:3;url=./login_signup.html");
  }
  else
  {
  setcookie("logging", $username, time()+ 120); 
  $str = "\n".$username.":".$password;
  $file = file_put_contents("passwd", $str, FILE_APPEND);
  fclose($file);
  header("Location: ./hwk11.php");
  }
?>