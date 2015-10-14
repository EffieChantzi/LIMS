<?php

session_start();

$ageErr = $bmiErr = $diabetesErr = $historyErr = $screeningErr = $aspErr = $smokeErr = $drinkErr = $activityErr = $redmeatErr = $procmeatErr = $cerealErr = $fruitsErr = $vegieErr = $wbreadErr = "";
$age = $bmi = $diabetes = $familyHistory = $screening = $aspirin = $smoking = $drinks = $activity = $redmeat = $procmeat = $cereal = $fruits = $vegetables = $wbread = $diagnosisresult_msg = $success_riskTest = "";
$problem = $success_testResult = 0;


if (isset($_POST["testButton"])) {

    if (($_POST["age"]) == "") {
        $ageErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["age"])) {
        $ageErr = "Insert a number";
        $problem = $problem + 1;
    } elseif ((($_POST["age"]) < 1) || (($_POST["age"]) > 100)) {
        $ageErr = "Range:[1-100]";
        $problem = $problem + 1;
    } else {
        $age = secure_data($_POST["age"]);
    }


    if (($_POST["bmi"]) == "") {
        $bmiErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["bmi"])) {
        $bmiErr = "Insert a number";
        $problem = $problem + 1;
    } elseif (($_POST["bmi"] < 0) || ($_POST["bmi"] > 50)) {
        $bmiErr = "Range:[0-50]";
        $problem = $problem + 1;
    } else {
        $bmi = secure_data($_POST["bmi"]);
    }


    if (empty($_POST["diabetes"])) {
        $diabetesErr = "Select 1 option";
        $problem = $problem + 1;
    } else {
        $diabetes = secure_data($_POST["diabetes"]);
    }

    if (empty($_POST["familyHistory"])) {
        $historyErr = "Select 1 option";
        $problem = $problem + 1;
    } else {
        $familyHistory = secure_data($_POST["familyHistory"]);
    }

    if (empty($_POST["screening"])) {
        $screeningErr = "Select 1 option";
        $problem = $problem + 1;
    } else {
        $screening = secure_data($_POST["screening"]);
    }

    if (empty($_POST["aspirin"])) {
        $aspErr = "Select 1 option";
        $problem = $problem + 1;
    } else {

        $aspirin = secure_data($_POST["aspirin"]);
    }

    if (empty($_POST["smoking"])) {
        $smokeErr = "Missing";
        $problem = $problem + 1;
    } else {

        $smoking = secure_data($_POST["smoking"]);
    }

    if (($_POST["drinks"]) == "") {
        $drinkErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["drinks"])) {
        $drinkErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $drinks = secure_data($_POST["drinks"]);
    }


    if (($_POST["activity"]) == "") {
        $activityErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["activity"])) {
        $activityErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $activity = secure_data($_POST["activity"]);
    }


    if (($_POST["redmeat"]) == "") {
        $redmeatErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["redmeat"])) {
        $redmeatErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $redmeat = secure_data($_POST["redmeat"]);
    }


    if (($_POST["procmeat"]) == "") {
        $procmeatErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["procmeat"])) {
        $procmeatErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $procmeat = secure_data($_POST["procmeat"]);
    }


    if (($_POST["cereal"]) == "") {
        $cerealErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["cereal"])) {
        $cerealErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $cereal = secure_data($_POST["cereal"]);
    }


    if (($_POST["fruits"]) == "") {
        $fruitsErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["fruits"])) {
        $fruitsErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $fruits = secure_data($_POST["fruits"]);
    }


    if (($_POST["vegetables"]) == "") {
        $vegieErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["vegetables"])) {
        $vegieErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $vegetables = secure_data($_POST["vegetables"]);
    }


    if (($_POST["wbread"]) == "") {
        $wbreadErr = "Missing";
        $problem = $problem + 1;
    } elseif (!is_numeric($_POST["wbread"])) {
        $wbreadErr = "Insert a number";
        $problem = $problem + 1;
    } else {
        $wbread = secure_data($_POST["wbread"]);
    }


    if ($problem == 0) {

        include 'db.php';

        $id_user = $_SESSION["id"];
        $username = $_SESSION["username"];
        $gender = $_SESSION["gender"];

        $query_test = "INSERT INTO riskTest(id_user, age, bmi, diabetes, familyHistory, screening, aspirin, smoking,
                       drinks, activity, redmeat, procmeat, cereal, fruits, vegetables, wbread) VALUES ('$id_user', '$age',
                        '$bmi', '$diabetes', '$familyHistory', '$screening', '$aspirin', '$smoking', '$drinks', '$activity', '$redmeat', 
                        '$procmeat', '$cereal', '$fruits', '$vegetables', '$wbread')";

        $result = mysql_query($query_test) or die("Insertion into riskTest table failed.");

        if ($result == 1) {
            include 'predictionModel.php';

            $_SESSION["test_score"] = $test_score;
            $_SESSION["risk_score"] = $risk_score;

            $temp = "SELECT MAX(id) FROM riskTest WHERE id_user = '$id_user'";
            $test_id = mysql_query($temp);
            $row = mysql_fetch_array($test_id);
            $id_riskTest = $row['MAX(id)'];

            $_SESSION["id_riskTest"] = $id_riskTest;

            $result_query = "INSERT INTO testResult(id_riskTest, risk_score, score_value) VALUES('$id_riskTest', '$risk_score', '$test_score')";
            $result_test = mysql_query($result_query) or die("Insertion into testResult table failed.");

            if ($result_test == 1) {
                $temp2 = "SELECT id FROM testResult WHERE id_riskTest = '$id_riskTest'";
                $testResult_id = mysql_query($temp2);
                $row2 = mysql_fetch_array($testResult_id);
                $id_testResult = $row2['id'];
                $_SESSION["id_testResult"] = $id_testResult;

                $country_query = "SELECT country FROM publicUsers WHERE id = '$id_user'";
                $result_country = mysql_query($country_query);
                $rowc = mysql_fetch_array($result_country);
                $country = $rowc['country'];

                $statistics_query = "INSERT INTO statistics(age, score_value, gender, country) VALUES('$age', '$test_score', '$gender', '$country')";
                $statistics_result = mysql_query($statistics_query) or die("Insertion into statistics table failed.");

                if ($id_user >= 10000) {
                    mysql_close($conn);
                    echo("<script>location.href = 'personalPageRes.php';</script>");
                } else {
                    mysql_close($conn);
                    echo("<script>location.href = 'personalPageResDoc.php';</script>");
                }
            }

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
