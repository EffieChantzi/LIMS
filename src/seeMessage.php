<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Combat Colon Cancer</title>
        <meta charset="utf-8">
        <link rel="icon" href="Images/logo.jpg">
        <link rel="shortcut icon" href="Images/logo.jpg">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="all" href="css/testFormStyle.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/formStyle.css">
        <link rel="stylesheet" href="css/boxes.css">
        <link rel="stylesheet" href="css/draft.css">
    </head>

    <style>
        .error {color: #FF9933;
                font: Arial, Helvetica, sans-serif;
                font-size: 14px;
        }

        sup {
            vertical-align: top;
            position: relative; 
            font-size: 12px;
            top: -0.5em;
        }

        body{
            background: #FFB46A;
        }

        #response {
            margin-top: 30px;
            margin-bottom: 20px;
            display: block;
            width: 400px;
            height: 120px;
            padding: 8px;
            border: 3px solid #FF6600;
            border-radius: 10px;
            line-height: 130%;
            font-size: 13px;
            box-shadow: 1px 1px 5px #CCC;
            background-color: #ffffff;

        }

        input[type="submit"]{
            background-color: #006666;
            border: 5px;
            color: #FF9933;
            cursor: pointer;
            font-weight: bold;
            float: right;
            font: 16px/20px Arial, Helvetica, sans-serif;
            padding: 8px 16px;
        }
    </style>


    <?php
    session_start();
    include 'reduceUnseenMessages.php';
    include 'inboxDoctor.php';
    include 'validateContactPatient.php';
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
                <div class="grid_12 prefix_00">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li><a href="profile.php">Profile <i><?php echo $_SESSION["username"]; ?></i></a>
                                    <ul>
                                        <li><a href="deleteAccount.php">Delete Account</a></li>
                                        <li><a href="logOut.php">Log Out</a></li>
                                    </ul>
                                </li>
                                <li><a href="personalPageDoctorForm.php">Test</a>
                                    <ul>
                                        <li><a href="viewTests.php">Previous Tests</a></li>
                                        <li><a href="plotProgress.php">Progress</a></li>
                                    </ul>
                                </li>
                                <li><a>Statistics</a>
                                    <ul>
                                        <li><a href="statistics.php">Gender</a></li>
                                        <li><a href="countryStatistics.php">Country</a></li>
                                    </ul>
                                </li>
                                <?php if ($count > 0) : ?>
                                    <li class = "mycurrent"><a href="messages.php">Messages (<?php echo $count; ?>)</a>
                                        <ul>
                                            <li class = "mycurrent"><a href="messages.php">Inbox (<?php echo $count; ?>) </a></li>
                                            <li class = "mycurrent"><a href="sentMesDoctor.php">Sent</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li class = "mycurrent"><a href="messages.php">Messages</a>
                                        <ul>
                                            <li class = "mycurrent"><a href="messages.php">Inbox</a></li>
                                            <li class = "mycurrent"><a href="sentMesDoctor.php">Sent</a></li>
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
        </header>

        <br>
        <br>
        <div class = "content">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <?php include 'patientPage.php'; ?>

            <div class = "container_12">
                <div class="drop-shadow raised">
                    <h5><?php echo $username_patient; ?></h5>
                    <br>
                    <st6><?php echo $message_patient; ?></st6>
                    <br><br>
                    <st8><?php echo $date_patient; ?></st8>
                </div>
            </div>


            <div class = "container_12">
                <div id="wrapper">
                    <form method="post">
                        <div class="col-3">
                            <label>
                                Age
                                <div class="clear"></div>
                                <st9><?php echo $age; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                BMI (kg/m<sup>2</sup>)
                                <div class="clear"></div>
                                <st9><?php echo $bmi; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Diabetes
                                <div class="clear"></div>
                                <st9><?php echo $diabetes; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Family History
                                <div class="clear"></div>
                                <st9><?php echo $familyHistory; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Ever had CRC screening?
                                <div class="clear"></div>
                                <st9><?php echo $screening; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Aspirin Use?
                                <div class="clear"></div>
                                <st9><?php echo $aspirin; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Smoker?
                                <div class="clear"></div>
                                <st9><?php echo $smoking; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Alcoholic Drinks (# per day)
                                <div class="clear"></div>
                                <st9><?php echo $drinks; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Vigorous Activity (hours/week)
                                <div class="clear"></div>
                                <st9><?php echo $activity; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Red Meat (times/week)
                                <div class="clear"></div>
                                <st9><?php echo $redmeat; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Processed Meat (times/week)
                                <div class="clear"></div>
                                <st9><?php echo $procmeat; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Cereal Intake (times/week)
                                <div class="clear"></div>
                                <st9><?php echo $cereal; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Fruits (serves/day)  
                                <div class="clear"></div>
                                <st9><?php echo $fruits; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Vegetables (serves/day)
                                <div class="clear"></div>
                                <st9><?php echo $vegetables; ?></st9>
                            </label>
                        </div>
                        <div class="col-3">
                            <label>
                                Wholemeal Bread (serves/week)
                                <div class="clear"></div>
                                <st9><?php echo $wbread; ?></st9>
                            </label>
                        </div>
                        <div class="col-2">
                            <label>
                                Risk Score
                                <div class="clear"></div>
                                <st9><?php echo $risk_score; ?></st9>
                            </label>
                        </div>
                        <div class="col-2">
                            <label>
                                Percentage
                                <div class="clear"></div>
                                <st9><?php echo $score_value; ?> &#37;</st9>
                            </label>
                        </div>

                        <div class = "col-1">
                            <label>Consultation
                                <br>
                                <span class="error"> <?php echo $messageErr; ?></span>
                                <textarea id = "response" rows="12" cols="50" name = "doctorMessage" placeholder="Enter your message:"></textarea>
                                <div class="clear"></div>

                                <div class="submit">
                                    <input class="bluebutton1 submitbotton" type="submit" name="contactPatient" value="Send">
                                    <div class="clear"> </div>
                                </div> 
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


