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

        include 'validateForm.php';
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
                                        <li class = "mycurrent"><a href="editAccount.php">Edit Account</a></li>
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


            <?php include 'edittingProfile.php'; ?>

            <div class = "container_12">
                <div class="grid_6 prefix_2"> 

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class = "sign_up">
                        <form  class="sign" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post"> <!-- action defines where the form contents are sent when the form is submitted-->

                            <div class="formtitle">Sign Up   <span class="error">* required fields</span> &nbsp;&nbsp;
                                <span class="error">
                                    <?php
                                    echo $error_message;
                                    echo $error_message1;
                                    echo $error_message2;
                                    echo $error_message3;
                                    ?>
                                </span>
                            </div>


                            <div class="top_section">
                                <div class="section">
                                    <div class="input username">
                                        <input type = "text" name = "username" value = "<?php echo $username; ?>">
                                        <span class="error">*<?php echo $usernameErr; ?></span>
                                    </div>
                                    <div class="input password">
                                        <input type = "password" placeholder = "Password" name = "password" value = "<?php echo htmlspecialchars($password); ?>">
                                        <span class="error">*<?php echo $passwordErr; ?></span>
                                    </div>

                                    <div class="clear"> </div>
                                </div>
                                <div class="section">                                    
                                    <div class="input password">
                                        <input type = "password" placeholder = "Retype password" name = "password2" value = "<?php echo htmlspecialchars($password2); ?>">
                                        <span class="error">*<?php echo $passwordErr2; ?></span>
                                    </div>
                                    <div class="clear"> </div>
                                </div>

                            </div>

                            <div class="bottom-section">
                                <div class="title">Personal Details</div>

                                <div class="section">
                                    <div class="input username">
                                        <input type = "text" name = "firstname" value = "<?php echo $first_name; ?>">
                                        <span class="error">*<?php echo $fnameErr; ?></span>

                                    </div>
                                    <div class="input password">
                                        <input type = "text" name ="lastname" value = "<?php echo $last_name; ?>">
                                        <span class="error">*<?php echo $lnameErr; ?></span> 
                                    </div>
                                    <div class="clear"> </div>
                                </div>

                                <div class = "section-country">
                                    <select id="dropdown" name="gender">
                                        <option value=""><?php echo $gender; ?></option>         
                                    </select>
                                    <div class="clear"> </div>
                                </div>

                                <div class = "section">
                                    <div class = "input-sign email">
                                        <?php if ($email == ""): ?>
                                            <input type="email" name="emailAddress" placeholder="email (name@domain.com)">
                                        <?php else: ?>
                                            <input type="email" name="emailAddress" value = "<?php echo $email; ?>">
                                        <?php endif; ?>
                                        <span class="error">*<?php echo $emailErr; ?></span>
                                    </div>
                                </div>

                                <div class= "section-country">
                                    <select id="country" name="country" >
                                        <option value=""> <?php echo $country; ?></option>                                                 
                                    </select>
                                    <div class="clear"> </div>
                                </div>
                                <div class="submit">
                                    <input class="bluebutton submitbotton" type="submit" value="Sign up" />
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>

    </body>

</html>