<html>

<head>
    <title>View</title>
</head>

<body>

<?php

$host = "fall-2015.cs.utexas.edu";
$user = "luping";
$pwd = "tsxTM9KCGY";
$dbs = "cs329e_luping";
$port = "3306";
$tbl_name = "STUDENTS";
    
// Get values from form 
$id = $_POST['id'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);
$sql1 = "SELECT * from $tbl_name WHERE ID='$id'";
$sql2 = "SELECT * from $tbl_name WHERE LAST='$lastname'";
$sql3 = "SELECT * from $tbl_name WHERE FIRST='$firstname'";
$sql4 = "SELECT * from $tbl_name WHERE LAST='$lastname' AND FIRST='$firstname'";

if($id!=''){
    $result = mysqli_query($connect, $sql1);  
}else{
    if($lastname == '' && $firstname != ''){
        $result = mysqli_query($connect, $sql3);
    }
    elseif($lastname != '' && $firstname == ''){
        $result = mysqli_query($connect, $sql2);
    }
    elseif($lastname != '' && $firstname != ''){
        $result = mysqli_query($connect, $sql4);
    }   
}

echo "<table width='700' border='1' cellspacing='0' cellpadding='3'>";
echo "<tr><th>ID</th><th>Lastname</th><th>Firstname</th><th>Major</th><th>GPA</th></tr>";

while ($row = $result->fetch_row())
{
echo "<tr><td width='20%'>" . $row[0] . "</td><td width='20%'>" 
    . $row[1] . "</td><td width='20%'>" . $row[2] . "</td><td width='20%'>" 
    . $row[3] . "</td><td width='20%'>" . $row[4] . "</td></tr>";
}

$result->free();
mysql_close();

?>

</body>

</html>