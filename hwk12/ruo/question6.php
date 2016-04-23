<!--
Author: Ruoying Li
Date Created: 2015/11/16
Assignment: HWK 12
-->
<?php
//Set no caching
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();
$oldtime = $_SESSION['time_started'];
$newtime = time();
$difference = $newtime - $oldtime;
if($difference > 900){
   header("Location: ./result.php"); 
}
else{

$answer = strtolower($_POST['question-6']);
if ($answer == "age"){
    $_SESSION["score"] += 10;
}
header("Location: ./result.php");
}
?>