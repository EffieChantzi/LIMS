<?php

session_start();

$id_testResult = $_SESSION["id_testResult"];
$username_patient = $_SESSION["username"];
$genderm = $_SESSION["gender"];
$id_riskTest = $_SESSION["id_riskTest"];
$score_value = $_SESSION["test_score"];

$message_patient = $DoctorErr = $success_medCase = "";
$docOptions = $problem = $id_profileDoctor = $checkbox_count = 0;


if (isset($_POST["toDoctorButton"])) {

    if (!empty($_POST["patientMessage"])) {
        $message_patient = secure_data($_POST["patientMessage"]);
    }

    if (empty($_POST['doctor_list'])) {
        $DoctorErr = "Select 1 doctor";
        $problem = $problem + 1;
    } else {

        $checkbox_count = count($_POST['doctor_list']);

        if ($checkbox_count > 1) {
            $DoctorErr = "Select exactly 1 doctor";
            $problem = $problem + 1;
        } else {

            foreach ($_POST['doctor_list'] as $value) {
                $str = $value;
            }
            if ($str == 1) {
                $id_profileDoctor = 1;
            } elseif ($str == 2) {
                $id_profileDoctor = 2;
            } elseif ($str == 3) {
                $id_profileDoctor = 3;
            } elseif ($str == 4) {
                $id_profileDoctor = 4;
            } else {
                $id_profileDoctor = 5;
            }
        }
    }


    if ($problem == 0) {

        include 'db.php';

        $query_medCase = "SELECT * FROM riskTest WHERE id = '$id_riskTest'";
        $result_medCase = mysql_query($query_medCase) or die("Error - Query not executed.");
        $count_medCase = mysql_num_rows($result_medCase);

        if ($count_medCase == 1) {
            $row_medCase = mysql_fetch_array($result_medCase);
            $agem = $row_medCase['age'];
            $bmim = $row_medCase['bmi'];
            $diabetesm = $row_medCase['diabetes'];
            $familyHistorym = $row_medCase['familyHistory'];
            $screeningm = $row_medCase['screening'];
            $aspirinm = $row_medCase['aspirin'];
            $smokingm = $row_medCase['smoking'];
            $drinksm = $row_medCase['drinks'];
            $activitym = $row_medCase['activity'];
            $redmeatm = $row_medCase['redmeat'];
            $procmeatm = $row_medCase['procmeat'];
            $cerealm = $row_medCase['cereal'];
            $fruitsm = $row_medCase['fruits'];
            $vegetablesm = $row_medCase['vegetables'];
            $wbreadm = $row_medCase['wbread'];

            $into_medCase = "INSERT INTO medicalCase(id_testResult, username_patient, age, gender, bmi, diabetes,
                    familyHistory, screening, aspirin, smoking, drinks, activity, redmeat, procmeat, 
                    cereal, fruits, vegetables, wbread, score_value, message_patient, id_profileDoctor) 
                    VALUES('$id_testResult', '$username_patient', '$agem', '$genderm', '$bmim', '$diabetesm', '$familyHistorym',
                    '$screeningm', '$aspirinm', '$smokingm', '$drinksm', '$activitym', '$redmeatm', '$procmeatm', '$cerealm',
                    '$fruitsm', '$vegetablesm', '$wbreadm', '$score_value', '$message_patient', '$id_profileDoctor')";

            $medCase = mysql_query($into_medCase) or die(mysql_error());
            if ($medCase == 1) {
                mysql_close();
                echo("<script>location.href = 'contactDoctorOk.php';</script>");
            }
        }


        mysql_close();
    }
}

function secure_data($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
