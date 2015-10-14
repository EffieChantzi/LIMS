<?php

include 'db.php';

$query = " SELECT s.age, s.score_value, s.gender FROM statistics s";

$result = mysql_query($query) or die("Error - Query not executed.");
$numOfRows = mysql_num_rows($result);

$table = array();
$table['cols'] = array(  
    array('label' => 'Age', 'type' => 'number'),
    array('label' => 'Score', 'type' => 'number'),
);

$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $temp = array();
    $temp[] = array('v' => (int) $r['age']); 
    $temp[] = array('v' => (float) $r['score_value']); 
    $temp[] = array('v' => (string) $r['gender']); 
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);

mysql_close();