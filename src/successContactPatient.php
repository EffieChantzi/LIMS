<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Combat Colon Cancer | Messages</title>
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

        #response:hover
        {
            width: 400px;
            height: 120px;
            border-radius: 10px;
            border: 3px solid #FF6600;
            padding: 8px;
            font-weight: 200;
            font-size: 13px;
            box-shadow: 1px 1px 5px #CCC;
        }

        input[type="submit"]
        {
            background-color:#ed8223;
            color:#fff;
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
            font-weight: bold;
            line-height:30px;
            cursor: pointer;
            -border-radius:4px;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            text-shadow:#C17C3A 0 -1px 0;
            width:120px;
            height:32px
        } 
    </style>


    <?php
    session_start();
    include 'reduceUnseenMessages.php';
    include 'inboxDoctor.php';
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
                                    <li class = "mycurrent"><a>Messages (<?php echo $count; ?>)</a>
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
            <div class = "container_12">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="drop-shadow round">
                    <h5>Dr <?php echo $_SESSION["username"] ?></h5><br>
                    <st6><?php
                        echo $_SESSION["sent"];
                        ?><br><br><br><br></st6>
                </div>
            </div>
        </div>

    </body>
</html>


