<?php
  $uname = trim($_POST["uname"]);
  $pword = trim($_POST["pword"]);
  $file = fopen("passwd", "r");
  $found = false;
  $line = fgets($file);
  while(!feof($file))
  {
    $line = explode(":", $line);
    $line[1] = trim($line[1]);
    if ($line[0] == $uname and $line[1] == $pword)
    {
      $found = true;
      break;
    }
    $line = fgets($file);
  }
  fclose($file);
  if ($found)
  {
    setcookie("loggedIn", $uname, time()+120);
  }
  header('Location: http://zweb.cs.utexas.edu/users/cs329e-fa15/sm44585/hwk11/welcome.php');
?>
