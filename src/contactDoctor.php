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
        <link rel="stylesheet" href="css/formStyle.css">
        <link rel="stylesheet" href="css/draft.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.1.1.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/forms.js"></script>

    </head>

    <style>
        .error {color: #669999;
                font: Arial, Helvetica, sans-serif;
                font-size: 14px;}

        input[type="submit"]{background-color: #006666;
                             border: 5px;
                             color: #FF9933;
                             cursor: pointer;
                             font-weight: bold;
                             float: right;
                             font: 16px/20px Arial, Helvetica, sans-serif;
                             padding: 8px 16px;
        }


        sup {
            vertical-align: top;
            position: relative; 
            font-size: 12px;
            top: -0.5em;}


        #response {
            display: block;
            width: 400px;
            height: 120px;
            padding: 8px;
            border: 3px solid #009999;
            border-radius: 10px;
            line-height: 130%;
            font-size: 13px;
            box-shadow: 1px 1px 5px #CCC;
            background-color: #E2E2FF;

        }
        
        #response:hover
        {
            width: 400px;
            height: 120px;
            border-radius: 10px;
            border: 3px solid #009999;
            padding: 8px;
            font-weight: 200;
            font-size: 13px;
            box-shadow: 1px 1px 5px #CCC;
        }

        body{
            background: #FFB46A;
            font-weight:bold;

        }

    </style>


    <?php
    session_start();
    include 'inboxPatient.php';
    include 'validateContact.php';
    ?>  


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
                    <div class = "grid_12 prefix_1">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li><a href="profile.php">Profile <i><?php echo $_SESSION["username"]; ?></i></a>
                                    <ul>
                                        <li><a href="deleteAccount.php">Delete Account</a></li>
                                        <li><a href="logOut.php">Log Out</a></li>
                                    </ul>
                                </li>
                                <li class = "mycurrent"><a href="personalPage.php">Test</a>
                                    <ul>
                                        <li class = "mycurrent"><a href="viewTests.php">Previous Tests</a></li>
                                        <li class = "mycurrent"><a href="plotProgress.php">Progress</a></li>
                                    </ul>
                                </li>
                                <li><a>Statistics</a>
                                    <ul>
                                        <li><a href="statistics.php">Gender</a></li>
                                        <li><a href="countryStatistics.php">Country</a></li>
                                    </ul>
                                </li>
                                <?php if ($count > 0) : ?>
                                    <li><a>Messages (<?php echo $count; ?>)</a>
                                        <ul>
                                            <li><a href="inboxMesPatient.php">Inbox (<?php echo $count; ?>) </a></li>
                                            <li><a href="sentMesPatient.php">Sent</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li><a>Messages</a>
                                        <ul>
                                            <li><a href="inboxMesPatient.php">Inbox</a></li>
                                            <li><a href="sentMesPatient.php">Sent</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div> 
                    <div class="clear"></div>
                    </div>
                </div>
            </div>  
        </header>



        <div class = "content">

            <div class = "container_12">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
               

                <form action = " <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="grid_4 prefix_1">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>Contact Form</h5>
                        <!--<div class = "st1"><span class="error">* optional field</span></div>-->
                        <fieldset>
                            <textarea id = "response" rows="12" cols="50" name="patientMessage" placeholder="Enter your message. This field is optional. However, it is advisable, since you may have specific questions to doctors. Otherwise, the doctor will be able to provide you only with an analysis of your risk factors and score."></textarea>
                        </fieldset>


                    </div>

                    <div class="grid_4 prefix_3">
                        <h5>Doctors</h5><span class="error"> <?php echo $DoctorErr; ?></span>
                        <br>
                        
                        <fieldset>
                            <input type="checkbox" name="doctor_list[]" value = "1"><st5>Dr. Kevin Thompson</st5><br>
                            <br>
                            <br>
                            <input type="checkbox" name="doctor_list[]" value = "2"><st5>Dr. Philip Hill</st5><br>
                            <br>
                            <br>
                            <input type="checkbox" name="doctor_list[]" value = "3"><st5>Dr. Dimitrios Papadogias</st5><br>
                            <br>
                            <br>
                            <input type="checkbox" name="doctor_list[]" value = "4"><st5>Dr. Leena Kang</st5><br>
                            <br>
                            <br>
                            <input type="checkbox" name="doctor_list[]" value = "5"><st5>Dr. Stephanie Anderssen</st5><br>
                        </fieldset>

                    </div>

                    <div class="grid_8 prefix_4">
                        <br>
                        <div class="submit">
                            <input class="bluebutton1 submitbotton" type="submit" name="toDoctorButton" value="Send">
                            <div class="clear"> </div>
                        </div> 

                    </div>
                </form>
                
            </div>
        </div>

    </body>
</html>