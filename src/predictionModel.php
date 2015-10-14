<?php

$age_score = $bmi_score = $gender_score = $diabetes_score = $familyHistory_score = $screening_score = $aspirin_score = $smoking_score = $drinks_score = 0;
$activity_score = $redmeat_score = $procmeat_score = $cereal_score = $fruits_score = $vegetables_score = $wbread_score = $test_score = $risk_score = 0;


if ($age > 15) {
    $age_score = 0.063 * $age;
}


if ($gender === "Female") {
    $gender_score = -0.283;
}


$bmi_score = 0.018 * $bmi;


if ($diabetes === "Yes") {
    $diabetes_score = 0.209;
}


if ($familyHistory == "Yes") {
    $familyHistory_score = 0.076;
}


if ($screening == "Yes") {
    $screening_score = -0.536;
}


if ($aspirin == "Yes") {
    $aspirin_score = -0.007;
}


if ($smoking == "Former") {
    $smoking_score = 0.241;
} elseif ($smoking === "Current") {
    $smoking_score = 0.254;
}

$drinks_score = 0.077 * $drinks;

if (($activity >= 0) && ($activity <= 1)) {
    $activity_score = 0.043;
} elseif (($activity > 1) && ($activity <= 3.5)) {
    $activity_score = -0.098;
} else {
    $activity_score = -0.249;
}

if ($redmeat >= 5) {
    $redmeat_score = 0.053;
}

if ($procmeat >= 5) {
    $procmeat_score = 0.146;
}

if ($cereal > 1) {
    $cereal_score = -0.088;
}

if ($fruits < 2) {
    $fruits_score = 0.077;
}

if ($vegetables < 5) {
    $vegetables_score = 0.083;
}

if ($wbread >= 5) {
    $wbread_score = -0.007;
}

/* pure score */
$risk_score = round(($age_score + $bmi_score + $gender_score + $diabetes_score + $familyHistory_score + $screening_score + $aspirin_score + $smoking_score + $drinks_score +
        $activity_score + $redmeat_score + $procmeat_score + $cereal_score + $fruits_score + $vegetables_score + $wbread_score), 2);

/* percentage score */
$test_score = round(((($age_score + $bmi_score + $gender_score + $diabetes_score + $familyHistory_score + $screening_score + $aspirin_score + $smoking_score + $drinks_score +
        $activity_score + $redmeat_score + $procmeat_score + $cereal_score + $fruits_score + $vegetables_score + $wbread_score) / 9.065) * 100), 2);

