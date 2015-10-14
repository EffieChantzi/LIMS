<?php

session_start();
$id = $_SESSION["id"];
$username = $_SESSION["username"];

include 'db.php';


$query = "SELECT * FROM medicalCase WHERE username_patient = '$username' AND  diagnosis IS NOT NULL AND seenPatient = 0";
$result = mysql_query($query) or die("Error - Query not executed.");
$count = mysql_num_rows($result);


mysql_close($conn);
