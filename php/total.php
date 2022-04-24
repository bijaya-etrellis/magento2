<?php

$math = 40;
$eng = 70;
$science = 50;

$m = ($math + $eng + $science);

if ($m >= 60) {
    $grade = "First Class";
} elseif($m > 45 && $m < 55) {
    $grade = "Second Class";
} elseif($m >= 33 && $m < 44) {
    $grade = "Third Class";
} else {
    $grade = "Fail";
}



echo "total mark is " . $m . " and grade " . $grade;
