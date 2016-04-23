
<?php
if ($_SESSION["question"] == "2"){
    $message = "You can't go back";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: ./question2.html");
}
session_start();

$oldtime = $_SESSION['time_started'];
$newtime = time();
$difference = $newtime - $oldtime;
if($difference > 900){
   header("Location: ./result.php"); 
}
else{
$answer = $_POST['question-1'];
if ($answer == "False"){
    $_SESSION["score"] += 10;
}
header("Location: ./question2.html");
}
?>