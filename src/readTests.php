<?php

session_start();
$id = $_SESSION["id"];

include 'db.php';

$query = "SELECT r.id, r.id_user, t.score_value, t.date_time FROM riskTest r, testResult t 
            WHERE r.id_user = '$id' AND r.id = t.id_riskTest ORDER BY t.date_time DESC";
$result = mysql_query($query) or die("Error - Query not executed.");
$rows = mysql_num_rows($result);

mysql_close($conn);


