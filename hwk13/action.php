<html>

<head>
    <meta charset="utf-8">
    <title>Action</title>
</head>

<body>
        
        
<?php
session_start();
if (isset($_SESSION["loggedIn"])){
  print <<<HLINE_EMPTY
        <button name = "insert" onclick="location.href='./insert.php'">Insert Student Record</button><br><br>
        <button name = "update" onclick="location.href='./update.php'">Update Student Record</button><br><br>
        <button name = "delete" onclick="location.href='./delete.php'">Delete Student Record</button><br><br>
        <button name = "view" onclick="location.href='./view.php'">View Student Record</button><br><br>
        <button name = "logout" onclick="location.href='./logout.php'">Logout</button>
HLINE_EMPTY;
}
else{
    echo "Redirecting...";
    header( "refresh:5;url=main_login.php" );
}
?>
</body>
</html>