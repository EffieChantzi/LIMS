<?php

session_start();

$fnameErr = $lnameErr = $gErr = $usernameErr = $passwordErr = $passwordErr2 = $emailErr = $countryErr = "";
$firstname = $lastname = $gender = $username = $password = $password2 = $email = $country = "";
$success_message = "";
$problem = $pre_exists = $signup_session = 0;
$error_message = $error_message1 = $error_message2 = $error_message3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $gender = $_POST["gender"];

    if (empty($_POST["firstname"])) {
        $fnameErr = "Missing";
        $problem = $problem + 1;
    } else {
        $firstname = secure_data($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            $fnameErr = "Only letters and white space allowed";
            $problem = $problem + 1;
        }
    }

    if (empty($_POST["lastname"])) {
        $lnameErr = "Missing";
        $problem = $problem + 1;
    } else {
        $lastname = secure_data($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            $lnameErr = "Only letters and white space allowed";
            $problem = $problem + 1;
        }
    }

    if (empty($_POST["gender"])) {
        $gErr = "Select 1 option";
        $problem = $problem + 1;
    } else {
        $gender = secure_data($_POST["gender"]);
    }

    if (empty($_POST["country"])) {
        $countryErr = "Select 1 option";
        $problem = $problem + 1;
    } else {
        $country = $_POST["country"];
    }

    if (!empty($_POST["emailAddress"])) {
        $email = $_POST["emailAddress"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $problem = $problem + 1;
        }
    }

    if (empty($_POST["username"])) {
        $usernameErr = "Missing";
        $problem = $problem + 1;
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Missing";
        $problem = $problem + 1;
    } else {

        if (strlen($_POST["password"]) < 5) {
            $passwordErr = "At least 5 characters long";
            $problem = $problem + 1;
            $password = $_POST["password"];
        } else {

            $password = $_POST["password"];
        }
    }

    if (empty($_POST["password2"])) {
        $passwordErr2 = "Missing";
        $problem = $problem + 1;
    } else {
        if ($_POST["password2"] === $password) {
            if (strlen($_POST["password2"]) < 5) {
                $passwordErr2 = "At least 5 characters long";
                $problem = $problem + 1;
            } else {
                $password2 = $_POST["password2"];
            }
        } else {
            $passwordErr2 = "Password Mismatch";
            $problem = $problem + 1;
        }
    }


    if ($problem == 0) {

        include 'db.php';

        $q = "SELECT * FROM publicUsers WHERE first_name = '$firstname' AND
                last_name = '$lastname' AND gender = '$gender' AND country = '$country' AND
                email = '$email' AND username = '$username' AND password = '$password'";

        $r = mysql_query($q) or die(mysql_error());
        if (mysql_num_rows($r) > 0) {
            $error_message = "Sorry, this user already exists!";
            $pre_exists = $pre_exists + 1;
        } else {
            $query1 = "SELECT username FROM publicUsers WHERE username = '$username'";
            $result1 = mysql_query($query1) or die(mysql_error());

            if (mysql_num_rows($result1) > 0) {
                $error_message1 = "Sorry, this username already exists!";
                $pre_exists = $pre_exists + 1;
            }

            $query2 = "SELECT password FROM publicUsers WHERE password = '$password'";
            $result2 = mysql_query($query2) or die(mysql_error());

            if (mysql_num_rows($result2) > 0) {
                $error_message2 = "Sorry, this password already exists!";
                $pre_exists = $pre_exists + 1;
            }

            $query3 = "SELECT email FROM publicUsers WHERE email = '$email'";
            $result3 = mysql_query($query3) or die(mysql_error());

            if ((mysql_num_rows($result3) > 0) && (!empty($_POST["emailAddress"]))) {
                $error_message3 = "Sorry, this email already exists!";
                $pre_exists = $pre_exists + 1;
            }
        }

        if ($pre_exists == 0) {

            $password = mysql_real_escape_string($password);
            $encrypted_password = md5($password);

            $query = "INSERT INTO publicUsers(first_name, last_name, gender, country, email, username, password)
                      VALUES ('$firstname', '$lastname', '$gender', '$country', '$email', '$username', '$encrypted_password')";
            $result = mysql_query($query) or die(mysql_error());
            if ($result == 1) {
                $_SESSION["username"] = $username;
                echo("<script>location.href = 'successSignUp.php';</script>");
            }
        }

        mysql_close($conn);
    }
}

function secure_data($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
