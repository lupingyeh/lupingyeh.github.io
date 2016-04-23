<?php
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  //Password Encryption using Blowfish
  $password_hash = crypt($password);
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
    header( "refresh:3;url=./hwk14.html");
  }
  else
  {
  setcookie("loggedIn", $username, time()+ 120); 
  $str = $username.":".$password_hash."\n";
  $file = file_put_contents("passwd", $str, FILE_APPEND);
  fclose($file);
  echo "Registration successful!";
  }
?>