<!--
Author: Ruoying Li
Date Created: 2015/11/16
Assignment: HWK 12
-->
<?php
session_start();
$oldtime = $_SESSION['time_started'];
$newtime = time();
$difference = $newtime - $oldtime;
if($difference > 900){
   header("Location: ./result.php"); 
}
else{
$answer = strtolower($_POST['question-5']);
if ($answer == "galaxy"){
    $_SESSION["score"] += 10;
}
echo $_SESSION["score"];
header("Location: ./question6.html");
}
?>