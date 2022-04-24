<?php
$m = 34;
if ($m >= 60) {
    $grade = "First Class";
} elseif($m > 45 && $m < 55) {
    $grade = "Second Class";
} elseif($m >= 33 && $m < 44) {
    $grade = "Third Class";
} else {
    $grade = "Fail";
}

echo "Student grade: $grade";



