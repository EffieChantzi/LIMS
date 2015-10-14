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
        <link rel="stylesheet" href="css/tableStyle.css">
        <link rel="stylesheet" href="css/draft.css">
    </head>

    <style>
        body{
            background: #FFB46A;
        }
    </style>


    <?php
    session_start();
    include 'inboxDoctor.php';
    ?>  

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
                <div class="grid_12 prefix_00">
                    <div class="mymenu_block">
                        <nav>
                            <ul>
                                <li class = "mycurrent"><a href="#">Profile <i><?php echo $_SESSION["username"]; ?></i></a>
                                    <ul>
                                        <li class = "mycurrent"><a href="deleteAccount.php">Delete Account</a></li>
                                        <li class = "mycurrent"><a href="logOut.php">Log Out</a></li>
                                    </ul>
                                </li>

                                <li><a href="personalPageDoctorForm.php">Test</a>
                                    <ul>
                                        <li><a href="viewTests.php">Previous Tests</a></li>
                                        <li><a href="plotProgress.php">Progress</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Statistics</a></li>
                                <?php if ($count > 0) : ?>
                                    <li><a>Messages (<?php echo $count; ?>)</a>
                                        <ul>
                                            <li><a href="messages.php">Inbox (<?php echo $count; ?>) </a></li>
                                            <li><a href="sentMesDoctor.php">Sent</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li><a>Messages</a>
                                        <ul>
                                            <li><a href="messages.php">Inbox</a></li>
                                            <li><a href="sentMesDoctor.php">Sent</a></li>
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
                <center>
                    <h3>
                        Personal Profile Page
                    </h3>
                    <br>
                    <logo><?php echo $_SESSION["username"]; ?></logo>
                </center>
                <br>
                <br>

            </div>  
        </div>
    </body>
</html>
