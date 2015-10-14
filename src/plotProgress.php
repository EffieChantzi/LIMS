
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


        <?php
        session_start();
        $gender = $_SESSION["gender"];
        include 'readScores.php';
        ?>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
                    google.load("visualization", "1.1", {packages: ["bar"]});
                    google.setOnLoadCallback(drawChart);
                    function drawChart() {
                    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
                            var options = {
                            chart: {

                            title: 'Progress Track',
                                    subtitle: 'Colorectal Cancer Risk',
                                    vAxis: {

                                    viewWindowMode:'explicit',
                                            viewWindow: {
                                            max:100,
                                                    min:0
                                            }

        },
                            },
                                    bars: { groupWidth: '30%' },
<?php if ($gender == "Female") : ?>
                                colors: ['#FF6600']
<?php else: ?>
                                colors: ['#006666']
<?php endif; ?>
                            };
                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
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
        <br>
        <div class = "content">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <div class = "container_12">
<?php if ($numOfRows == 0) : ?>
                    <style> body {background: #FFB46A;}</style>

                    <div class="drop-shadow round">
                        <h5>Dear <?php echo $_SESSION["username"] ?></h5><br>
                        <st6>You have not taken the test yet.<br><br> 
                            You should try it at least twice, in order to be able to see your progress 
                            and at least once, so as to visualize your result graphically.<br><br><br><br></st6>
                    </div>

<?php elseif ($numOfRows == 1) : ?>
                    <div class = "grid_6 prefix_4">    
                        <div id="columnchart_material" style="width: 400px; height: 600px;"></div>
                    </div>                  
                <?php else: ?>  
                    <div class = "grid_12 prefix_1">    
                        <div id="columnchart_material" style="width: 900px; height: 600px;"></div>
                    </div>
                <?php endif; ?>

            </div>   

        </div>

    </body>
</html>

