<?php
session_start();
$oldtime = $_SESSION['time_started'];
$newtime = time();
$difference = $newtime - $oldtime;
if($difference > 900){
   header("Location: ./result.php"); 
}
else{
if(!empty($_POST['question-4'])) {   
    $select = array();
    foreach($_POST['question-4'] as $key => $selected){
        $select[$key]=$selected;
        if ($select[0] == 'd' && count($select) == 1) {
            $_SESSION["score"] += 10;        
        }      
    }
}
else{
    echo "<b>Please Select at least One Answer.</b>";
}
header("Location: ./question5.html");
}
?>