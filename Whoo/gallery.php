<?php
session_start();
 
if(!isset($_SESSION['email']))
{
header("Location: login.html");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Gallary</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script>
        if ($(window).width() > 1024) {
            document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
        }
    </script>
    <script>
        jQuery(window).load(function () {
            $x = $(window).width();
            if ($x > 1024) {
                jQuery("#content .row").preloader();
            }
            jQuery('.magnifier').touchTouch();
            jQuery('.spinner').animate({
                'opacity': 0
            }, 1000, 'easeOutCubic', function () {
                jQuery(this).css('display', 'none')
            });
        });
    </script>

</head>

<body>
<div class="spinner"></div>
<!-- header -->
<header>
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <h1 class="brand brand_"><a href="homepage.php"><img id = "logo" alt="" src="img/Ho_Logo.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li><a href="homepage.php">Home</a></li>
                                <li class="active"><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="bg-content">
    <!-- Content -->
    <div id="content">
        <div class="ic"></div>
        <div class="container">
            <div class="row">
                <article class="span12">
                    <h4>Gallery</h4>
                </article>
                <div class="clear"></div>

<?php
    
//Connect to the database
require('connect.php');

$res=mysql_query("SELECT * FROM albums");
echo "<ul class='portfolio clearfix'>";
while($row=mysql_fetch_array($res)) {
    echo "<li class='box'>";
    echo "<a href='album.php?album_id=$row[0]'>";
    echo "<img alt='' src=$row[3] ></a></li>";
}
echo "</ul>";
?>
                

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container clearfix">
            <div class="privacy">&copy; 2015 | <a href="">Ho</a> | Website developed by <a href="">Luping Yeh </a>&amp; <a href="">Ruoying Li</a></div>
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
</body>

</html>
