<?php

session_start();
$id = $_SESSION["id"];
$diagnosis = "";

if (isset($_GET['action']) && $_GET['action'] == 'press') {
    $id_mC = $_GET['id'];

    include 'db.php';

    $query_pro = "SELECT t.date_time, m.username_patient, m.message_patient, m.diagnosis, m.date_time_d
                  FROM testResult t, medicalCase m WHERE t.id = m.id_testResult AND m.id = '$id_mC'
                  AND m.diagnosis IS NOT NULL";

    $result_pro = mysql_query($query_pro) or die("Error - Query not executed.");
    $row_pro = mysql_fetch_array($result_pro);
    $sent_doctor = $row_pro['diagnosis'];
    $date_doctor = $row_pro['date_time_d'];
    $username_patient = $row_pro['username_patient'];
    $message_patient = $row_pro['message_patient'];
    $date_patient = $row_pro['date_time'];

    mysql_close($conn);
}

