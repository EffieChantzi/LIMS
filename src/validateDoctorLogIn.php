<?php

session_start();

$usernameErr = $passwordErr = "";
$username = $password = "";
$problem = 0;
$loginSession = false;
$successful_login = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "Missing";
        $problem = $problem + 1;
    } else {
        $username = secure_data($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Missing";
        $problem = $problem + 1;
    } else {
        $password = secure_data($_POST["password"]);
    }


    if ($problem == 0) {

        include 'db.php';

        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);


        $query = "SELECT * FROM doctorUsers WHERE username = '$username' AND password = '$password'";
        $result = mysql_query($query) or die("Error - Query not executed.");
        $count = mysql_num_rows($result);

        if ($count == 1) {
            $row = mysql_fetch_array($result);
            $_SESSION["id"] = $row['id'];
            $_SESSION["gender"] = $row['gender'];
            $_SESSION["username"] = $row['username'];

            if (isset($_SESSION["username"])) {
                mysql_close($conn);
                echo("<script>location.href = 'profile.php';</script>");
            }
        } else {
            $successful_login = "Wrong username or password!";
            mysql_close($conn);
        }
    }
}

function secure_data($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
