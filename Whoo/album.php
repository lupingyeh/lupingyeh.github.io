<!DOCTYPE html>

<head>
    <title>Ho | Album</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/mediaelement/2.13.1/mediaelementplayer.min.css">
    <link rel="stylesheet" href="./css/player.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="http://cdn.jsdelivr.net/mediaelement/2.13.1/mediaelement-and-player.min.js"></script>
    <script src="./js/player.js"></script>
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
            jQuery(".list-blog li:last-child").addClass("last");
            jQuery(".list li:last-child").addClass("last");
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
    <!--  header  -->
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
        <!--  content  -->
        <div id="content">
            <div class="ic"></div>
            <div class="container">
                <div class="row">
                    <article class="span7">
                        <div class="inner-1">
                            <ul class="list-blog">
                                <li>
    
<?php

    // Get http request parameters
    $album_id = $_GET['album_id'];
    //Connect to the database
    require('connect.php');
                            
    $album_query = "SELECT * FROM albums WHERE id=$album_id";

                                    
    // Perform database query
    $res=mysql_query($album_query);
                                    
    // Render database query results
    $row=mysql_fetch_array($res);
    echo "<h3>$row[1]</h3>";
    echo "<span> by </span>";
    echo "<a href=''>$row[2]</a>";
    echo "<div class='clear'></div>";
    echo "<img alt='No image found!' src=$row[4]>";
    echo "<p>$row[5]</p>";

    // Disconnect database 
    mysqli_close($connection);                                   
?>                               
                                    
                                    
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="span5">

                        <div id="wrapper">
                            <audio id="mejs" src="music/Snakecharm_-_01_-_Gravity.mp3" type="audio/mp3" controls="controls"></audio>
                            <ul class="mejs-list">
                                <li class="current" data-url="music/Snakecharm_-_01_-_Gravity.mp3"><i class="fa fa-play-circle"></i> 01. Gravity (18:51)</li>
                                <li data-url="music/Snakecharm_-_02_-_Maze.mp3"><i class="fa fa-play-circle"></i> 02. Maze (09:58)</li>

                                <li data-url="music/Snakecharm_-_03_-_Kabir.mp3"><i class="fa fa-play-circle"></i> 03. Kabir (01:31)</li>
                                <li data-url="music/Snakecharm_-_04_-_Trance.mp3"><i class="fa fa-play-circle"></i> 04. Trance (21:05)</li>
                            </ul>
                        </div>

                    </article>

                </div>
            </div>
        </div>
    </div>
    <!--  footer  -->
    <footer>
        <div class="container clearfix">
            <div class="privacy">&copy; 2015 | <a href="">Ho</a> | Website developed by <a href="">Luping Yeh </a>&amp; <a href="">Ruoying Li</a></div>
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
</body>

</html>