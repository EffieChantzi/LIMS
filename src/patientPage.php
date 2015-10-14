<?php

session_start();
$id = $_SESSION["id"];
$id_mC = $_SESSION["id_mC"];

include 'db.php';

$query = "SELECT t.date_time, t.risk_score, m.message_patient, m.username_patient, m.age, m.bmi, m.diabetes,
          m.familyHistory, m.screening, m.aspirin, m.smoking, m.drinks, m.activity, m.redmeat,
          m.procmeat, m.cereal, m.fruits, m.vegetables, m.wbread, m.score_value FROM testResult t, medicalCase m
          WHERE t.id = m.id_testResult AND m.id = '$id_mC'";
$result = mysql_query($query) or die("Error - Query not executed.");
$row = mysql_fetch_array($result);

$message_patient = $row['message_patient'];
$username_patient = $row['username_patient'];
$date_patient = $row['date_time'];
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









