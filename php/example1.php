<?php

$variable = (float)1987;
$variable1 = 'bijayalaxmi';
define('testconstant', $variable1);
$variable1 = 'sanam';
var_dump($variable1);
var_dump($variable);
print_r($variable1);
print_r($variable);
if ($variable == 123) {
    $variable = 456;

} else {
    $variable = 789;
}
print_r($variable);

$a = 1;
$b = 1.5;
$c = $a + $b;
echo $b;
echo " ===== ";
echo $c;
echo " ===== ";
echo (int) $b;
echo " ===== ";
$c = $a + (int) $b;
echo $c;
echo testconstant;

