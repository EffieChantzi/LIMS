
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Combat CC | Sign Up</title>
        <meta charset="utf-8">
        <link rel="icon" href="Images/logo.jpg">
        <link rel="shortcut icon" href="Images/logo.jpg">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/boxes.css">
        <link rel="stylesheet" href="css/draft.css">
    </head>

    <body>
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
                <div class="grid_12 prefix1">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li class="mycurrent"><a href="index.php">Home</a></li>
                                <li class = "mycurrent"><a href="logInForm.php">Sign In</a>
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

        <style>
            .error {color: #FF6600;
                    font: Arial, Helvetica, sans-serif;
                    padding-left: 15px;
                    font-size: 14px;}

            body{
                background: #FFB46A;
            }
        </style>


        <?php
        session_start();
        ?>  

        <div class="content">
            <div class="container_12">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="drop-shadow raised">
                    <h5>Congratulations</h5><br>
                    <st6> Dear <?php echo $_SESSION["username"]?>
                    </st6>
                    <br>
                    <st6>
                        you are now registered and able to experiment with the 
                        colorectal cancer risk test after logging in. 
                    </st6>
                    <br><br><br><br><br>
                </div>
            </div>
        </div>

        <?php
        session_unset();
        session_destroy();
        ?>

    </body>
</html>