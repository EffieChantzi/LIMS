<?php

session_start();
$id_user = $_SESSION["id"];
$username = $_SESSION["username"];


if (isset($_POST["deleteAccount"])) {

    include 'db.php';


    if ($id_user >= 10000) {

        $query = "DELETE FROM publicUsers WHERE id = '$id_user'";
    } else {

        $query = "DELETE FROM doctorUsers WHERE id = '$id_user'";
    }
    $result = mysql_query($query) or die("Error - Query not executed.");

    if ($result == 1) {

        mysql_close();
        session_unset();
        session_destroy();
        echo("<script>location.href = 'index.php';</script>");
    }
} else {

    if (isset($_POST["noDeleteAccount"])) {

        echo("<script>location.href = 'profile.php';</script>");
    }
}







