<?php

session_start();
$id = $_SESSION["id"];
$username = $_SESSION["username"];

include 'db.php';

$query = "SELECT t.date_time, m.id, m.username_patient, m.message_patient, m.diagnosis, m.date_time_d,
            d.first_name, d.last_name FROM testResult t, medicalCase m, doctorUsers d WHERE t.id = m.id_testResult
            AND m.id_profileDoctor = '$id' AND m.diagnosis IS NOT NULL AND m.id_profileDoctor = d.id ORDER BY m.id DESC";
$result = mysql_query($query) or die("Error - Query not executed.");
$rows = mysql_num_rows($result);

mysql_close($conn);
