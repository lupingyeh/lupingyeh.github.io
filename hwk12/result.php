<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>PHP Sessions Result</title>

</head>
<body>
<?php
    session_start();

    $str = trim($_SESSION["username"]) . ":" . $_SESSION["score"] . "\n";
    $file = file_put_contents("./result.txt", $str, FILE_APPEND);
   
    echo "<h3>Hi, " . $_SESSION["username"] . "! Your total score is  " . $_SESSION["score"] . ".</h3>";
    session_destroy();
?> 
</body>
</html>