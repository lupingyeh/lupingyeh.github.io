<html>

<head>
    <title>View All</title>
</head>

<body>

<?php

$host = "fall-2015.cs.utexas.edu";
$user = "luping";
$pwd = "tsxTM9KCGY";
$dbs = "cs329e_luping";
$port = "3306";
$tbl_name = "STUDENTS";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);
$result = mysqli_query($connect, "SELECT * from $tbl_name ORDER BY LAST ASC");

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