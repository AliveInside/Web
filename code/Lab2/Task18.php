<?php

function More(int $a, int $b): bool {
    if ($a + $b > 10) {
        return true;
    }
    else {
        return false;
    }
}
function Equal(int $a, int $b): bool {
    if ($a === $b) {
        return true;
    }
    else {
        return false;
    }
}

$test = 0;
echo ($test == 0) ? "True" : "False";


$age = 54;
if ($age > 10 && $age < 99){
    $sum = 0;
    while($age > 0){
        $sum += $age % 10;
        $age /= 10;
    }
    if ($sum < 10){
        echo "Single digit sum";
    }
    else{
        echo "Double digit sum";
    }
}
else{
    if ($age < 10){
        echo "Age lower than 10";
    }
    else{
        echo "Age higher than 99";
    }
}
echo nl2br("\n");


$arr = array(2,5,3);
$sum = 0;
if (count($arr) === 3){
    foreach ($arr as $value){
        $sum += $value;
    }
    echo($sum . "\n");
}