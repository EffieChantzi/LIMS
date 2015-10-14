<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Combat Colon Cancer</title>
        <meta charset="utf-8">
        <link rel="icon" href="Images/logo.jpg">
        <link rel="shortcut icon" href="Images/logo.jpg"> <!-- specify favicon of our web site-->
        <link rel="stylesheet" href="css/style.css"> <!-- structure/style -->
        <link rel="stylesheet" href="css/font-awesome.css"> <!-- font style -->
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/boxes.css">
        <link rel="stylesheet" href="css/formStyle.css">
        <link rel="stylesheet" href="css/draft.css">
    </head>

    <style>
        .error {color: #FF9933;
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
        
        body{
                background: #FFB46A;
            }
    </style>


    <?php
    session_start();
    include 'inboxPatient.php';
    $test_score = $_SESSION["test_score"];
    $risk_score = $_SESSION["risk_score"];
    include 'diagnosisRequest.php';
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
                                    <li class = "mycurrent"><a>Messages (<?php echo $count; ?>)</a>

                                        <ul>
                                            <li class = "mycurrent"><a href="inboxMesPatient.php">Inbox (<?php echo $count; ?>) </a></li>
                                            <li class = "mycurrent"><a href="sentMesPatient.php">Sent</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li class = "mycurrent"><a>Messages</a>
                                        <ul>
                                            <li class = "mycurrent"><a href="inboxMesPatient.php">Inbox</a></li>
                                            <li class = "mycurrent"><a href="sentMesPatient.php">Sent</a></li>
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
        <div class = "content">
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class = "container_12">
                <div class = "grid_9 prefix_2">
                    <div class="drop-shadow rotated">
                        <h5>Score Risk</h5>
                        <st6><?php
                        echo $risk_score;
                        ?></st6>
                    </div>
                </div>
                <div class = "grid_9 prefix_2">
                    <div class="drop-shadow rotated">
                        <h5>Percentage</h5>
                        <st6><?php echo $test_score; ?>&#37;<st6>
                    </div>
                </div>
                <div class = "grid_9 prefix_2">
                    <div class="drop-shadow raised">
                        <h5>Consult our doctors</h5>
                        <st6><i>Do you want further consultation?</i>
                        <br>
                        <br>
                        It is possible for you, to write your own text message to 
                        one of them, who is going to answer back to you, as soon as possible.</st6>

                        <form action =" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                            <div class="submit">
                                <input class="bluebutton1 submitbotton" type="submit" name="diagnosisButton" value="Diagnosis">
                                <div class="clear"> </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>