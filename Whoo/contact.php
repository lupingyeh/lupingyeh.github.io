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
    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script>
        jQuery(window).load(function () {
            jQuery('.spinner').animate({
                'opacity': 0
            }, 1000, 'easeOutCubic', function () {
                jQuery(this).css('display', 'none')
            });
        });
    </script>
    
    <script type='text/javascript'>
    function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}
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
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li class="active"><a href="contact.php">Contact</a></li>
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
        <!-- content -->
        <div id="content">
            <div class="ic"></div>
            <div class="container">
                <div class="row">
                    <article class="span8">
                        <h3>Contact Us</h3>
                        <div class="inner-1">
                            <form id="contact-form" action="">
                                <fieldset>
                                    <div>
                                        <label class="name">
                                            <input type="text" id="name" name="name" placeholder="Your Name">
                                            <br>
                                        </label>
                                    </div>      
                                    <div>
                                        <label class="email">
                                            <input type="email" name="email" id="email" value="<?php echo $_COOKIE['email'] ?>">
                                            <br>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="message">
                                            <textarea>Message</textarea>
                                            <br>
                                        </label>
                                    </div>
                                    <div class="buttons-wrapper"> <a class="btn btn-1" data-type="reset">Clear</a> 
                                        <a class="btn btn-1" data-type="submit" onclick="lengthRestriction(document.getElementById('name'), 3, 20)">Send</a></div>
                                </fieldset>
                            </form>
                            
                            <div id="reference">
                                <p>The audios and album information of this website come from <a href="http://freemusicarchive.org/">Free Music Archive</a>.</p>
                            </div>
                            
                        </div>
                    </article>
                    <article class="span4">
                        <h3>About Us</h3>
                        <div class="map">
                            <a href="#"><img src="img/we.jpg" alt=""></a>
                        </div>
                        <address class="address-1">
          
                      <div class="overflow"> 
                        <h5>Lu-Ping Yeh</h5>
                        <span>School:</span>University of Texas at Austin<br>
                        <span>Major:</span>Information Sciences<br>
                        <span>E-mail:</span><a href="#" class="mail-1">lupingyeh@utexas.edu</a><br>
                        <br>
                        <h5>Rouying Li</h5>
                        <span>School:</span>University of Texas at Austin<br>
                        <span>Major:</span>Information Sciences<br>
                        <span>E-mail:</span><a href="#" class="mail-1">ruoying0225@gmail.com</a><br>
                      </address>
                    </article>
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