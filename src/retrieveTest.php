<?php

session_start();
$id = $_SESSION["id"];

if (isset($_GET['action']) && $_GET['action'] == 'press') {
    $id_rT = $_GET['id'];

    include 'db.php';

    $query = "SELECT r.age, r.bmi, r.diabetes, r.familyHistory, r.screening, r.aspirin, r.smoking,
            r.drinks, r.activity, r.redmeat, r.procmeat, r.cereal, r.fruits, r.vegetables, r.wbread, t.risk_score, t.score_value
            FROM riskTest r, testResult t WHERE r.id_user = '$id' AND r.id = '$id_rT' AND r.id = t.id_riskTest";

    $result = mysql_query($query) or die("Error - Query not executed.");
    $row = mysql_fetch_array($result);
    $age = $row['age'];
    $bmi = $row['bmi'];
    $diabetes = $row['diabetes'];
    $familyHistory = $row['familyHistory'];
    $screening = $row['screening'];
    $aspirin = $row['aspirin'];
    $smoking = $row['smoking'];
    $drinks = $row['drinks'];
    $activity = $row['activity'];
    $redmeat = $row['redmeat'];
    $procmeat = $row['procmeat'];
    $cereal = $row['cereal'];
    $fruits = $row['fruits'];
    $vegetables = $row['vegetables'];
    $wbread = $row['wbread'];
    $risk_score = $row['risk_score'];
    $score_value = $row['score_value'];

    mysql_close($conn);
}

