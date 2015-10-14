<?php

session_start();
$id = $_SESSION["id"];
$username = $_SESSION["username"];

include 'db.php';

$query = "SELECT t.date_time, m.id, m.message_patient, m.diagnosis, 
            d.first_name, d.last_name FROM testResult t, medicalCase m, doctorUsers d WHERE t.id = m.id_testResult
            AND m.username_patient = '$username' AND m.id_profileDoctor = d.id ORDER BY m.id DESC";
$result = mysql_query($query) or die("Error - Query not executed.");
$rows = mysql_num_rows($result);

mysql_close($conn);
