<?php
if(isset($_POST["name2check"]) && $_POST["name2check"] != ""){
    $username = preg_replace('#[^a-z0-9]#i', '', $_POST['name2check']);    
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
    
    if ($unique == true) {
	    //echo '<strong>' . $username . '</strong> is OK!';
	    exit();
    } else {
	    echo '<strong>' . $username . '</strong> is taken, please try another one!';
	    exit();
    }
}
?>