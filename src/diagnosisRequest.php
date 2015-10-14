<?php

session_start();
$id_riskTest = $_SESSION["id_riskTest"];

if (isset($_POST["diagnosisButton"])) {

    include 'db.php';

    $update_testResult = "UPDATE testResult SET diagnosis = 'Yes' WHERE id_riskTest = '$id_riskTest' ";
    $result_update = mysql_query($update_testResult) or die("Error - Query not executed.");
    if ($result_update) {

        echo("<script>location.href = 'contactDoctor.php';</script>");
    }
    mysql_close();
}
