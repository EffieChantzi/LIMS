<?php

session_start();
$id = $_SESSION["id"];

if (isset($_GET['action']) && $_GET['action'] == 'press') {
    $id_mC = $_GET['id'];

    include 'db.php';

    $query_pro = "SELECT seen FROM medicalCase WHERE id = '$id_mC'";
    $result_pro = mysql_query($query_pro) or die("Error - Query not executed.");
    $row_pro = mysql_fetch_array($result_pro);
    $seen = $row_pro['seen'];

    if ($seen == 0) {
        $query = "UPDATE medicalCase SET seen = 1 WHERE id = '$id_mC'";
        $result = mysql_query($query) or die("Error - Query not executed.");
        $_SESSION["id_mC"] = $id_mC;
    }

    mysql_close($conn);
}

