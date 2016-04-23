<?php
session_start();
 
if(!isset($_SESSION['email']))
{
header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ho Post Rock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.kwicks-1.5.1.js"></script>
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
    <!-- header start -->
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
                                    <li class="active"><a href="homepage.php">Home</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
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
        <div class="container">
            <div class="row">
                <div class="span12">
                    <!-- slider -->
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <a href="album.php?album_id=1"><img src="img/slide-1.jpg" /></a>
                            </li>
                            <li>
                                <a href="album.php?album_id=3"><img src="img/slide-2.jpg" alt=""> </a>
                            </li>
                            <li>
                                <a href="album.php?album_id=2"><img src="img/slide-3.jpg" alt=""> </a>
                            </li>
                            <li>
                                <a href="album.php?album_id=8"><img src="img/slide-4.jpg" alt=""> </a>
                            </li>
                            <li>
                                <a href="album.php?album_id=11"><img src="img/slide-5.jpg" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                    <span id="responsiveFlag"></span>
                    <div class="block-slogan">
                        <h2>Ho Post Rock!</h2>
                        <div id="intro">
                            <p id="introduction">A post rock music platform aiming to help post rock fans find different post-rock albums, and artists more easily as well as listen to the soundtracks online. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div id="content" class="content-extra">
            <div class="ic"></div>
            <div class="row-1">
                <div class="container">
                    <div class="row">
                        <article class="span12">
                        <h4>Gallery</h4>
                        </article>
                        <ul class="portfolio clearfix">
                            <li>
                                <a href="album.php?album_id=4" class="album"><img alt="" src="img/thumbnails/album1.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=2" class="album"><img alt="" src="img/thumbnails/album2.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=10" class="album"><img alt="" src="img/thumbnails/album3.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=6" class="album"><img alt="" src="img/thumbnails/album4.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=3" class="album"><img alt="" src="img/thumbnails/album5.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=1" class="album"><img alt="" src="img/thumbnails/album6.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=5" class="album"><img alt="" src="img/thumbnails/album7.jpg"></a>
                            </li>
                            <li class="box">
                                <a href="album.php?album_id=8" class="album"><img alt="" src="img/thumbnails/album8.jpg"></a>
                            </li>
                        </ul>
                    </div>
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