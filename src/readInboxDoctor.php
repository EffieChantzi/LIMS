<?php

session_start();
$id = $_SESSION["id"];

include 'db.php';

$query = "SELECT id, username_patient, message_patient FROM medicalCase
          WHERE id_profileDoctor = '$id' AND  seen = 0";
$result = mysql_query($query) or die("Error - Query not executed.");
$rows = mysql_num_rows($result);

mysql_close($conn);
