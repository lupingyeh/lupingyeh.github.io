
<?php
session_start();
$oldtime = $_SESSION['time_started'];
$newtime = time();
$difference = $newtime - $oldtime;
if($difference > 900){
   header("Location: ./result.php"); 
}
else{
$_SESSION["question"] = "2";
$answer = $_POST['question-2'];
if ($answer == "True"){
    $_SESSION["score"] += 10;
}
header("Location: ./question3.html");
}
?>