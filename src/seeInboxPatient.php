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
        <link rel="stylesheet" href="css/boxes.css">
        <link rel="stylesheet" href="css/draft.css">
    </head>

    <style>
        body{
            background: #FFB46A;
        }
    </style>


    <?php
    session_start();
    include 'reduceUnseenPatient.php';
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
                <div class="grid_12 prefix_1">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li><a href="profile.php">Profile <i><?php echo $_SESSION["username"]; ?></i></a>
                                    <ul>
                                        <li><a href="deleteAccount.php">Delete Account</a></li>
                                        <li><a href="logOut.php">Log Out</a></li>
                                    </ul>
                                </li>
                                <li><a href="personalPage.php">Test</a>
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
        <br>
        <div class = "content">


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class = "container_12">
                <?php include 'retrieveInbox.php'; ?>

                <div class="drop-shadow raised">
                    <h3>Dr. <?php echo $doc_firstname; ?> <?php echo $doc_lastname; ?></h3>
                    <br>
                    <st6><?php echo $diagnosis; ?></st6>
                    <br><br>
                    <st8><?php echo $date_diagnosis; ?></st8>
                </div>

                <div class="drop-shadow round">
                    <h3>Me</h3>
                    <br>
                    <st6><?php echo $sent_patient; ?></st6>
                    <br><br>
                    <st8><?php echo $date_patient; ?></st8>
                </div>

                <br>
                <br>

            </div>
        </div>
    </body>
</html>


