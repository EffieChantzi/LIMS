<?php

session_start();

$id_mC = $_SESSION["id_mC"];
$messageErr = $messageDoctor = $sent = "";
$problem = 0;

if (isset($_POST["contactPatient"])) {

    if (!empty($_POST["doctorMessage"])) {
        $messageDoctor = secure_data($_POST["doctorMessage"]);
    } else {
        $messageErr = "Please enter your answer";
        $problem = $problem + 1;
    }

    if ($problem == 0) {

        include 'db.php';

        $query = "UPDATE medicalCase SET diagnosis = '$messageDoctor', date_time_d = NOW() WHERE id = '$id_mC'";
        $result = mysql_query($query) or die("Error - Query not executed.");

        if ($result) {
            $sent = "Your message has been successfully sent!";
            $_SESSION["sent"] = $sent;
            echo("<script>location.href = 'successContactPatient.php';</script>");
        } else {
            echo("<script>location.href = 'index.php';</script>");
        }

        mysql_close();
    }
}

function secure_data($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
