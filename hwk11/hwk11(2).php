<?PHP
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache"); 
?>

<html>
<head>
	<title>Cookies</title>
	<style>
	h5 {
		color:blue;
		margin-top:0px;
		padding-top:0px;
	}
	p {
		margin-bottom:0;
	}
	</style>
</head>

<body>
	<h1>The News Bulletin</h1>
	<p>Tuesday, November 17, 2015 | Austin </p>

<?php
if (!isset($_COOKIE["logging"]))
  {
  print <<<NONLOGGING
	<ul>
		<li><a href="login_signup.html">Supreme Court Takes a Major Abortion Case, From Texas</a></li>
		<li><a href="login_signup.html">Blast at Stadium Forces President to Hastily Evacuate</a></li>
		<li><a href="login_signup.html">Russia Suspended by Track and Field's Governing Body</a></li>
		<li><a href="login_signup.html">Kurdish Forces Take Iraqi City From ISIS in Major Offensive</a></li>
		<li><a href="login_signup.html">Fantasy Sports Site Leaves Path to Evade State Bans</a></li>
	</ul>
NONLOGGING;
}
else {
	$username = $_COOKIE["logging"];
    print <<<LOGGING
    <h5>Hi, $username! Welcome to The News Bulletin.</h5>
	<ul>
		<li><a href="headline01.html">Supreme Court Takes a Major Abortion Case, From Texas</a></li>
		<li><a href="headline02.html">Blast at Stadium Forces President to Hastily Evacuate</a></li>
		<li><a href="headline03.html">Russia Suspended by Track and Field's Governing Body</a></li>
		<li><a href="headline04.html">Kurdish Forces Take Iraqi City From ISIS in Major Offensive</a></li>
		<li><a href="headline05.html">Fantasy Sports Site Leaves Path to Evade State Bans</a></li>
	</ul>
LOGGING;
    
}

?>

</body>
</html>


