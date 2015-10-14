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
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/draft.css">
    </head>

    <style>
        body{
            background: #FFB46A;
        }

        sup {
            vertical-align: top;
            position: relative; 
            font-size: 12px;
            top: -0.5em;
        }
    </style>


    <?php
    session_start();
    include 'inboxPatient.php';
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
                                <li class = "mycurrent"><a href="personalPage.php">Test</a>
                                    <ul>
                                        <li class = "mycurrent"><a href="viewTests.php">Previous Tests</a></li>
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
        </header>

        <br>
        <br>
        <div class = "content">
            <div class = "container_12">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


                <?php include 'retrieveTest.php'; ?>

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

                    </form>
                </div>

                <br>
                <br>

            </div>
        </div>

    </body>
</html>


