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
                <br>
                <br>
                <br>

                <?php include 'readSentDoctor.php'; ?>
                <div class="table-title">
                    <center><h3>Personal Sent Mailbox</h3></center>
                </div>
                <?php if ($rows == 0): ?>
                    <table class="table-fill">
                        <thead>
                            <tr>
                                <th class="text-left">Date</th>
                                <th class="text-left">To</th>                                
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <tr>
                                <td> <center>---------</center> </td>
                        <td> <center>No sent messages</center> </td>
                        </tr>
                        </tbody>
                    </table>
                <?php else : ?>

                    <table class="table-fill">
                        <thead>
                            <tr>
                                <th class="text-left">Date</th>
                                <th class="text-left">To</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">

                            <?php
                            $i = 0;
                            $key = 0;

                            while ($i < $rows) {

                                $key = mysql_result($result, $i, "id");
                                $date = mysql_result($result, $i, "date_time_d");
                                $to = mysql_result($result, $i, "username_patient");
                                ?>
                                <tr>
                                    <td class="text-center"><a  href = "seeSentDoctor.php?action=press&id=<?php echo $key; ?>"><?php echo $date; ?></a></td>
                                    <td class="text-center"><a href = "seeSentDoctor.php?action=press&id=<?php echo $key; ?>"><?php echo substr($to, 0, 25); ?></a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                <?php endif; ?>

                <br>
                <br>

            </div>
        </div>

    </body>
</html>


