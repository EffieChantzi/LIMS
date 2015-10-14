<?php

session_start();
$id = $_SESSION["id"];

include 'db.php';

$query = "SELECT t.date_time, t.score_value FROM riskTest r, testResult t 
            WHERE r.id_user = '$id' AND r.id = t.id_riskTest";
$result = mysql_query($query) or die("Error - Query not executed.");
$numOfRows = mysql_num_rows($result);

$table = array();
$table['cols'] = array(
    array('label' => 'Date', 'type' => 'string'),
    array('label' => 'Risk Score %', 'type' => 'number')
);

$rows = array();
while ($r = mysql_fetch_assoc($result)) {
    $temp = array();
    $temp[] = array('v' => (string) substr($r['date_time'], 0, 10));
    $temp[] = array('v' => (float) $r['score_value']);
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);


mysql_close();
