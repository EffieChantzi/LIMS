<?php

session_start();
$id_user = $_SESSION["id"];
$username = $_SESSION["username"];
include 'db.php';


if ($id_user >= 10000) {

    $query = "SELECT * FROM publicUsers WHERE id = '$id_user'";
} else {

    $query = "SELECT * FROM doctorUsers WHERE id = '$id_user'";
}
$result = mysql_query($query) or die("Error - Query not executed.");
$row = mysql_fetch_array($result);
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$gender = $row['gender'];
$country = $row['country'];
$email = $row['email'];


mysql_close();
