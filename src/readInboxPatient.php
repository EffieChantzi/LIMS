<?php

session_start();
$id = $_SESSION["id"];
$username = $_SESSION["username"];

include 'db.php';

$query = "SELECT m.id, m.diagnosis, d.first_name, d.last_name 
          FROM medicalCase m, doctorUsers d WHERE 
          m.username_patient = '$username' AND m.seenPatient = 0 AND m.diagnosis
          IS NOT NULL AND m.id_profileDoctor = d.id";
$result = mysql_query($query) or die("Error - Query not executed.");
$rows = mysql_num_rows($result);

mysql_close($conn);
