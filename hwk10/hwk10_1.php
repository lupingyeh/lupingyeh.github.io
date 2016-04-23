<html>
<head>
	<title>Sign-Up Sheet</title>
</head>
<body>

<h1>Sign-Up Sheet</h1>
	
<?php
$file = fopen('signup.csv', 'r');
while (!feof($file)) {
		$line_of_text[] = fgetcsv($file);
	}
fclose($file);


print "<form  action=\"hwk10.php\", method=\"GET\">";
print "<table width = \"40%\" border = \"2\">";

$counter = 0;
foreach ( $line_of_text as $key=>$value ){
	print "<tr>";	
	print "<td>$value[0]</td>";
	//print "<td>$value[1]</td>";
	print "<td><input type = \"text\" name = \"$counter\" id = \"$counter\" value = \"$value[1]\"></td>";
	print "</tr>";
	$counter++;
}
//$text_0 = (isset($_POST['0'])) ? $_POST['0'] : 'NULL';

print "</table>";
print "<input type=\"reset\" value=\"Reset\" />";
print "<input type=\"submit\" name=\"submit\" value=\"Submit\">";				
print "</form>";


$text = array();


$text[0] = $_GET['0'];
$text[1] = $_GET['1'];
$text[2] = $_GET['2'];
$text[3] = $_GET['3'];
$text[4] = $_GET['4'];
$text[5] = $_GET['5'];
$text[6] = $_GET['6'];
$text[7] = $_GET['7'];
$text[8] = $_GET['8'];
$text[9] = $_GET['9'];
// print "$text_0";
// print "$text_1";
// print "$text_2";
// print "$text_3";
// print "$text_4";
////
// $text_0 = (isset($_GET['0'])) ? $_GET['0'] : 'NULL';
// $text_0 = (isset($_GET['1'])) ? $_GET['1'] : 'NULL';

$fp = fopen("signup.csv", "w");
$count = 0;
	foreach ( $line_of_text as $key=>$value ){
	$data = $value[0] . "," . $text[$count] . "\n" ;
	$counter++;
	fwrite($fp, $data );
	}

fclose($fp);
?>

</body>
</html>