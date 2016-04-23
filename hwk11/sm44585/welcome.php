<?php
  // any valid date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// always modified right now
// HTTP/1.1
header("Cache-Control: private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0");
// HTTP/1.0
header("Pragma: no-cache");
?>
<!Doctype html>
<!--
Author: Spencer Muncey
Date Created: November 17 2015
Date Modified: November 17 2015
Assignment: HWK 11
-->
<html>
<head>
  <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
  <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> 
  <title>The Daily News</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
</head>
<body onbeforeunload="">
<!--Header of newspaper website -->
  <div class="top">
    <h1>The Daily News</h1>    
    <table>
      <tr>
         <td>November 17, 2015</td>
         <td>Austin, Texas</td>
      <tr>
    </table>
  </div>
<h2>Today's Headlines</h2>
<?php
  if (!isset($_COOKIE["loggedIn"]))
  {
  print <<<HLINE_EMPTY
  <ul>
    <li><a href="./hline_empty.html">Over 130 confirmed dead Paris terror attack</a></li>
    <li><a href="./hline_empty.html">Baylor Bears lose in close game to Oklahoma Sooners</a></li>
    <li><a href="./hline_empty.html">Worldwide vigils held for those who died in Paris</a></li>
    <li><a href="./hline_empty.html">French President Francois Hollande declares attack "act of war"</a></li>
    <li><a href="./hline_empty.html">French TGV high-speed train derails near Strasbourg</a></li>
  </ul>
  <h3>Returning User? Please login to view the full story</h3>
  <form method="post" action="login.php">
    Username:<br>
    <input type="text" name="uname">
    <br>
    Password:<br>
    <input type="password" name="pword"><br>
    <input type="submit" value="Submit"> <input type="reset" value="Reset">
  </form>
  <h3>New user? Please sign up to view the full story</h3>
  <form method="post" action="register.php">
    Username:<br>
    <input type="text" name="new_uname">
    <br>
    Password:<br>
    <input type="password" name="new_pword"><br>
    <input type="submit" value="Submit"> <input type="reset" value="Reset">
  </form>
HLINE_EMPTY;
  }
  else
  {
  $uname = $_COOKIE["loggedIn"];
  print <<<HLINE_FULL
  <h3>Welcome, $uname! Thank you for logging in and supporting The Daily News.</h3>
  <ul>
    <li><a href="./hline1.html">Over 130 confirmed dead Paris terror attack</a></li>
    <li><a href="./hline2.html">Baylor Bears lose in close game to Oklahoma Sooners</a></li>
    <li><a href="./hline3.html">Worldwide vigils held for those who died in Paris</a></li>
    <li><a href="./hline4.html">French President Francois Hollande declares attack "act of war"</a></li>
    <li><a href="./hline5.html">French TGV high-speed train derails near Strasbourg</a></li>
  </ul>
HLINE_FULL;
  }
?>
</body>
</html>
