<?php

function increaseEnthusiasm(string $value) {
    return $value . "!";
}
echo nl2br(increaseEnthusiasm("Hello World") . "\n");

function repeatThreeTimes(string $value) {
    return $value . $value . $value;
}
echo nl2br(repeatThreeTimes("World")  . "\n");

echo nl2br(increaseEnthusiasm(repeatThreeTimes("Hello")) . "\n");

function cut(string $value, int $count = 10) {
    $value2 = "";
    for ($i = 0; $i < $count; $i++) { 
        $value2 .= $value[$i];
    }
    return $value2;
}
echo nl2br(cut("World", 3) . "\n");

$arrGlobal = [1,2,3,4,5,6];
function Recursion($arr, $now) {
    echo $arr[$now] . " ";
    if ($now + 1 < sizeof($arr)) {
        req ($arr, $now + 1);
    }
}
echo nl2br(Recursion($arrGlobal, 0) . "\n");

$number = 303;
function Summorize(int $num) {
    $sum = 0;
    while ($num != 0) {
        $sum += $num % 10;
        $num /= 10;
    }
    if ($sum > 9) {
        return Summorize($sum);
    }
    else {
        return $sum;
    }
}
echo Summorize($number);