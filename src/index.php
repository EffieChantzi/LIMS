<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Combat Colon Cancer</title>
        <meta charset="utf-8">
        <link rel="icon" href="Images/logo.jpg">
        <link rel="shortcut icon" href="Images/logo.jpg">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/draft.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/elastislide.css">        
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.1.1.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.equalheights.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/modernizr.custom.63321.js"></script>
        <script src="js/jquerypp.custom.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
        <script src="js/jquery.elastislide.js"></script>
        <script src="js/jquery.catslider.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>

        <script>
            $(window).load(function () {
                $('#mi-slider').catslider();
                $('#carousel').elastislide({
                    orientation: 'vertical'
                });
            });

            $(window).load(function () {
                $('#carousel1').carouFredSel({
                    auto: false,
                    prev: '.prev1',
                    next: '.next1',
                    width: 220,
                    items: {
                        visible: {
                            min: 1,
                            max: 1
                        },
                        height: 'auto',
                        width: 220,
                    },
                    responsive: true,
                    scroll: 1,
                    mousewheel: false,
                    swipe: {
                        onMouse: false,
                        onTouch: false
                    }
                });
            });

            $(document).ready(function () {
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            });
        </script>      

        <style type="text/css">
            .gapClass{margin-left:200px;}
        </style>
    </head>


    <body class="page1">
        <header>
            <div class="container_12">

                <br>
                <br>
                <br>
                <br>

                <center><logo>Combat Colorectal Cancer</logo></center>
                <br>
                <center><logo>CCC</logo></center>
                <br>
                <br>
                <div class ="grid_12 prefix_0">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li class="mycurrent"><a href="index.php">Home</a></li>
                                <li><a href="logInForm.php">Sign In</a>
                                    <ul>
                                        <li><a href="signUpForm.php">Sign Up</a></li>
                                    </ul>
                                </li>
                                <li><a href="testDescription.php">Test</a></li>
                                <li><a>Statistics</a>
                                    <ul>
                                        <li><a href="statistics.php">Gender</a></li>
                                        <li><a href="countryStatistics.php">Country</a></li>
                                    </ul>
                                </li>    
                                <li><a href="doctorsForm.php">Doctors</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div> 
                    <div class="clear"></div>
                </div>
            </div>  
        </header>


        <br>
        <br>
        <br>
        <div class = "content">
            <div class = "container_12">
                <div class = "grid_12">


                    <div id="mi-slider" class="mi-slider">
                        <ul>
                            <li><a href="#"><img id = "i1" src="Images/back09.JPG" HEIGHT="320" WIDTH="280" BORDER="0" alt = ""></a></li>
                            <li><a href="#"><img id = "i2" src="Images/back01.jpg" HEIGHT="300" WIDTH="280" BORDER="0" alt = ""></a></li>
                            <li><a href="#"><img id = "i3" src="Images/back07.jpg" HEIGHT="300" WIDTH="280" BORDER="0" alt = ""></a></li>
                        </ul>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <nav>
                            <a>Eat healthy  <b class = gapClass></b> Exercise Regularly <b class = gapClass></b> Protect Yourself</a>
                        </nav>
                    </div>
                </div>

                <div class="grid_9 prefix_2"> 
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5>Welcome to our website</h5>

                    <div class="extra_wrapper">
                        <st7>
                            If you are worried about developing colorectal cancer, making decisions about contacting doctor, or
                            wondering about your current health status after changing your lifestyle, we can help. Just sign up, take
                            an easy cancer diagnosis test and know about your health regarding CRC risk. Besides, choose a
                            specialist of your choice and send message instantly!
                        </st7>
                    </div>

                    <div class="clear"></div>

                </div>
            </div>
        </div>

        <div class="bottom_block">
            <div class="container_12">
                <div class="grid_10 prefix_1">
                    <div class="column"><st7>LIMS Application</st7></div>
                    <div class="column"><st7>Gastro Clinic, Uppsala</st7></div>
                    <div class="column"><st7>March 2015</st7></div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>

    </body>
</html>

