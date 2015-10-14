
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

        <?php include 'ageVsRiskFM.php'; ?>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">

            google.load("visualization", "1.1", {packages: ["corechart"]});
            google.setOnLoadCallback(drawSeriesChart);

            google.chdl = Male | Female;
            function drawSeriesChart() {

                var dataF = new google.visualization.arrayToDataTable([
                    ['', 'Age', '', 'Gender', 'Risk Score', {role: 'style'}],
<?php
$i = 0;


while ($i < $numOfRows) {

    $age = mysql_result($result, $i, "age");
    $score = mysql_result($result, $i, "score_value");
    $gender = mysql_result($result, $i, "gender");

    if ($gender == "Female") :
        ?>
                            ['', <?php echo $age; ?>, <?php echo $score; ?>, 'Female', <?php echo $score; ?>, '#FF6600'],
    <?php else : ?>
                            ['', <?php echo $age; ?>, <?php echo $score; ?>, 'Male', <?php echo $score; ?>, '#006666'],
    <?php
    endif;

    $i++;
}
?>


                ]);

                var options = {
                    title: 'Age vs. Colorectal Cancer Risk Score',
                    hAxis: {title: 'Age', minValue: 0, maxValue: 100},
                    vAxis: {title: 'Score %', minValue: 0, maxValue: 100},
                    colors: ['#FF6600', '#006666']
                };

                var chart = new google.visualization.BubbleChart(document.getElementById('chart_div1'));
                chart.draw(dataF, options);

            }
        </script>
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

        .legend {list-style: none; 
                 padding-left: 300px;}
        .legend span {border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px;}
        .legend .male {background-color: #006666;}
        .legend .female {background-color: #FF6600;}
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
                                            <li class="mycurrent"><a href="statistics.php">Gender</a></li>
                                            <li><a href="countryStatistics.php">Country</a></li>
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

        <div class = "content">
            <br>
            <br>
            <br>
            <center><div id="chart_div1" style="width: 1350px; height: 600px;"></div></center>
        </div>

    </body>
</html>

