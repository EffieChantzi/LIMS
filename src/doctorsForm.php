<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Combat CC | Doctors</title>
        <meta charset="utf-8">
        <link rel="icon" href="Images/logo.jpg">
        <link rel="shortcut icon" href="Images/logo.jpg"> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/formStyle.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/draft.css">
        <link rel="stylesheet" href="css/slider.css">
    </head>

    <style>
        .error {color: #FF9933;
                font: Arial, Helvetica, sans-serif;
                font-weight: bold;
                padding-left: 15px;
                font-size: 14px;}

        body{
            background: #FFB46A;
        }
    </style>



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
                <div class="grid_12 prefix_0">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>
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
                                <li class="mycurrent"><a href="doctorsForm.php">Doctors</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <!--</div>-->
                </div>
        </header>


        <?php include 'validateDoctorLogIn.php';
        ?>    


        <div class="content">

            <div class="container_12">

                <div class="grid_6 prefix_2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div id="mi-slider" class="mi-slider">
                        <div class="member-login">

                            <form class = "login" action =" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" > 

                                <fieldset> 

                                    <div class="formtitle">Doctor Login</div>
                                    <span class="error"><?php echo $successful_login; ?></span>
                                    <div class="input">
                                        <input type="text" name = "username" placeholder="Username">
                                        <span class="error"> <?php echo $usernameErr; ?></span>
                                    </div>

                                    <div class="input">
                                        <input type = "password" name = "password" placeholder="Password">
                                        <span class="error"> <?php echo $passwordErr; ?></span>
                                    </div>

                                    <div class="submit">
                                        <input class="bluebutton submitbotton" type="submit" name="loginButton" value="Log in">
                                        <div class="clear"> </div>
                                    </div>


                                </fieldset>

                            </form>   
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </body>
</html>