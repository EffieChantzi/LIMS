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
        <link rel="stylesheet" href="css/draft.css">
        <link rel="stylesheet" href="css/boxes.css">
        <link rel="stylesheet" href="css/formStyle.css">
    </head>

    <style>
        .error {color: #FF6600;
                font: Arial, Helvetica, sans-serif;
                font-weight: bold;
                padding-left: 20px;
                font-size: 14px;
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

    </style>


    <?php
    session_start();


    if ($_SESSION["id"] >= 10000) {

        include 'inboxPatient.php';
    } else {

        include 'inboxDoctor.php';
    }

    include 'deletingAccount.php';
    ?>  


    <body class="page1">
        <header>
            <div class="container_12">

                <br>
                <br>
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
                                <li  class = "mycurrent"><a href="profile.php">Profile <i><?php echo $_SESSION["username"]; ?></i></a>
                                    <ul>
                                        <li class = "mycurrent"><a href="deleteAccount.php">Delete Account</a></li>
                                        <li class = "mycurrent"><a href="logOut.php">Log Out</a></li>
                                    </ul>
                                </li>


                                    <?php if ($_SESSION["id"] >= 10000) : ?>
                                    <li><a href="personalPage.php">Test</a>
                                        <ul>
                                            <li><a href="viewTests.php">Previous Tests</a></li>
                                            <li><a href="plotProgress.php">Progress</a></li>
                                        </ul>
                                    </li>
                                    
                                    <?php else : ?>
                                    <li><a href="personalPageDoctorForm.php">Test</a>
                                        <ul>
                                            <li><a href="viewTests.php">Previous Tests</a></li>
                                            <li><a href="plotProgress.php">Progress</a></li>
                                        </ul>
                                    </li>
                                    <?php endif; ?>

                                <li><a>Statistics</a>
                                    <ul>
                                        <li><a href="statistics.php">Gender</a></li>
                                        <li><a href="countryStatistics.php">Country</a></li>
                                    </ul>
                                </li>

                                    <?php if ($count > 0) : ?>
                                    <li><a>Messages (<?php echo $count; ?>)</a>

                                        <ul>
                                                <?php if ($_SESSION["id"] >= 10000) : ?>
                                                <li><a href="inboxMesPatient.php">Inbox (<?php echo $count; ?>) </a></li>
                                                <li><a href="sentMesPatient.php">Sent</a></li>
                                                <?php else : ?>
                                                <li><a href="messages.php">Inbox (<?php echo $count; ?>) </a></li>
                                                <li><a href="sentMesDoctor.php">Sent</a></li>
                                            <?php endif; ?>
                                                
                                        </ul>
                                    </li>
                                    
                                    <?php else : ?>
                                    <li><a>Messages</a>
                                        <ul>

                                            <?php if ($_SESSION["id"] >= 10000) : ?>
                                                <li><a href="inboxMesPatient.php">Inbox</a></li>
                                                <li><a href="sentMesPatient.php">Sent</a></li>
                                            <?php else : ?>
                                                <li><a href="messages.php">Inbox</a></li>
                                                <li><a href="sentMesDoctor.php">Sent</a></li>
                                            <?php endif; ?>

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
            <br>

            <div class = "container_12">

                <form  method="post"> 
                    <div class="drop-shadow raised">
                        <h5>Confirmation</h5><br>                    
                        <st6><?php echo $_SESSION["username"] ?>, do you want to delete<br> your account permanently?</st6><br><br>
                    </div>

                    <div class = "grid_1 prefix_05">
                        <div class="submit">
                            <input class="bluebutton1 submitbotton" type="submit" name="deleteAccount" value="Confirm">

                        </div>
                    </div>

                    <div class = "grid_1 prefix_1">
                        <div class="submit">
                            <input class="bluebutton1 submitbotton" type="submit" name="noDeleteAccount" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>