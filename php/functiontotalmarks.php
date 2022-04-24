<?php
function totalmarks($name, $eng, $math, $science){
    $marks = ($math + $eng + $science);
    return [$name, $marks];
}

$bijayalaxmi = totalmarks('bijayalaxmi', 60, 70, 80,);
$bijayalaxmi1 = totalmarks('Sanam', 90, 70, 80,);
$bijayalaxmi2 = totalmarks('xyz', 10, 70, 80,);
print_r($bijayalaxmi);
echo "total mark of " . $bijayalaxmi[0] . " and mark " . $bijayalaxmi[1]. ". ";
echo "total mark of " . $bijayalaxmi1[0] . " and mark " . $bijayalaxmi2[1]. ". ";

