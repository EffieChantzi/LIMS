
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


        <?php include 'countryRisk.php'; ?>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages: ["geochart"]});
            google.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {

                var data = new google.visualization.arrayToDataTable([
                    ['Country', 'Risk Percentage'],
<?php
$i = 0;


while ($i < $rows) {

    $country = mysql_result($result, $i, "country");
    $score = mysql_result($result, $i, "round(avg(score_value))");
    ?>
                        [<?php echo json_encode($country); ?>, <?php echo $score; ?>],
    <?php
    $i++;
}
?>


                ]);

                var options = {colorAxis: {colors: ['#9999FF', '#FF0000']}};

                var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

                chart.draw(data, options);
            }
        </script>
    </head>

    <style>
        .error {color: #FF9933;
                font: Arial, Helvetica, sans-serif;
                font-size: 14px;}


        sup {
            vertical-align: top;
            position: relative; 
            font-size: 12px;
            top: -0.5em;}


        .legend { list-style: none; }
        .legend span { border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px; }
        .legend .male { background-color: #006666; }
        .legend .female { background-color: #FF6600; }

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

                <?php if (($_SESSION["id"] != "")) : ?>
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

                                    <li class = "mycurrent"><a>Statistics</a>
                                        <ul>
                                            <li class = "mycurrent"><a href="statistics.php">Gender</a></li>
                                            <li class = "mycurrent"><a href="countryStatistics.php">Country</a></li>
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

                <?php else: ?>
                    <div class="grid_12 prefix_0">
                        <div class="mymenu_block">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="logInForm.php">Sign In</a>
                                        <ul>
                                            <li><a href="signUpForm.php">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="testDescription.php">Test</a></li>
                                    <li class="mycurrent"><a>Statistics</a>
                                        <ul>
                                            <li><a href="statistics.php">Gender</a></li>
                                            <li class="mycurrent"><a href="countryStatistics.php">Country</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="doctorsForm.php">Doctors</a></li>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div> 
                        <div class="clear"></div>
                    </div>

                <?php endif; ?>

            </div>  
        </header>

        <br>
        <br>


        <div class = "content">

            <?php if ($_SESSION["id"] == ""): ?>
                <br>
                <br>
                <br>
                <br>

            <?php else: ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

            <?php endif; ?>
            <div class = "container_12">

                <center>
                    <h6>
                        Worldwide  CRC  Prevalence
                    </h6>
                </center>
                <br>

                <div id="regions_div" style="width: 1000px; height: 600px;"></div>  

            </div>

        </div>

    </body>
</html>

