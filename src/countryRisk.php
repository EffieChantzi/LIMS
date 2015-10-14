<?php

include 'db.php';

$query = "SELECT country, round(avg(score_value)) FROM statistics GROUP BY country";

$result = mysql_query($query) or die("Error - Query not executed.");
$rows = mysql_num_rows($result);


mysql_close();