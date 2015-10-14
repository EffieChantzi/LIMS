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
    </head>

    <style>
        .error {color: #FF9933;
                font: Arial, Helvetica, sans-serif;
                font-size: 14px;
        }

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

    if ($_SESSION["id"] >= 10000) {

        include 'inboxPatient.php';
    } else {

        include 'inboxDoctor.php';
    }
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
        <div class = "content">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class = "container_12">
                <div class = "grid_12">
                    <div class="drop-shadow round">
                        <?php if ($_SESSION["id"] >= 10000) : ?>
                            <h5>Welcome <?php echo $_SESSION["username"] ?></h5><br>
                            <st6>
                                This is your personal profile page.
                                <br><br> 
                                Your CCC account provides you with several different options.
                                <br><br>
                                You are able to manage your personal account, perform the Colorectal Cancer Risk Test,
                                and interact with the doctors of our clinic.
                                <br><br><br><br>
                            </st6>

                        <?php else : ?>
                            <h5>Welcome Dr <?php echo $_SESSION["username"] ?></h5><br>
                            <st6>
                                This is your personal profile page.
                                <br><br> 
                                Your CCC account provides you with several different options.
                                <br><br>
                                You are able to manage your personal account, perform the Colorectal Cancer Risk Test,
                                and interact with people, who need your precious consultation.
                                <br><br><br><br>
                            </st6>
                        <?php endif; ?>
                    </div>

                    <div class = "grid_3">
                        <div class="drop-shadow rotated">
                            <h2>Profile</h2>
                            <st9>Your account can be easily edited or deleted.</st9>
                        </div>
                    </div>

                    <div class = "grid_3">
                        <div class="drop-shadow raised">
                            <h2>Test</h2>
                            <st9>You can perform the risk test, review previous tests and keep visual track of your progress.</st9>
                        </div>    

                    </div>

                    <div class = "grid_3">
                        <div class="drop-shadow rotated">
                            <h2>Statistics</h2>
                            <st9>You can investigate the prevalence of Colorectal Cancer around the world.</st9>
                        </div>
                    </div>

                    <div class = "grid_3 ">
                        <div class="drop-shadow raised">
                            <h2>Messages</h2>
                            <st9>Your personal mailbox including sent and inbox messages.</st9>
                        </div>    
                    </div>

                </div>
            </div>

        </div>

    </body>
</html>