<?php

session_start();
$id = $_SESSION["id"];
$diagnosis = "";

if (isset($_GET['action']) && $_GET['action'] == 'press') {
    $id_mC = $_GET['id'];

    include 'db.php';

    $query_pro = "SELECT t.date_time, m.message_patient, m.diagnosis, m.date_time_d, 
        m.seenPatient, d.first_name, d.last_name FROM testResult t, medicalCase m, 
        doctorUsers d WHERE t.id = m.id_testResult AND m.id = '$id_mC' AND m.id_profileDoctor = d.id";
    $result_pro = mysql_query($query_pro) or die("Error - Query not executed.");
    $row_pro = mysql_fetch_array($result_pro);
    $sent_patient = $row_pro['message_patient'];
    $date_patient = $row_pro['date_time'];

    if ($row_pro['seenPatient'] == 1) {
        $diagnosis = $row_pro['diagnosis'];
        $date_diagnosis = $row_pro['date_time_d'];
        $doc_firstname = $row_pro['first_name'];
        $doc_lastname = $row_pro['last_name'];
    }

    mysql_close($conn);
}

