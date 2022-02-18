<?php

$Arr = [];
$Str = "x";
for ($i = 0; $i < 8; $i++) { 
    $Arr[$i] = $Str;
    $Str .= "x";
    echo $Arr[$i] . " ";
}
echo nl2br("\n");


function arrayFill($str, $num) {
    $res = [];
    for ($i = 0; $i < $num; $i++) { 
        $res[$i] = $str;
    }
    return $res;
}
$arr = arrayFill("a", 6);
for ($i = 0; $i < sizeof($arr); $i++) { 
    echo $arr[$i] . " ";
}
echo nl2br("\n");


$arr = array(array(1,2,3),array(4,5),array(6));
$sum = 0;
foreach ($arr as $value) {
    foreach ($value as $value2){
        $sum += $value2;
    }
}
echo($sum . "\n");


$num = 1;
for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        $arr[$i][$j] = $num++;
    }
}


$arr = array(2,5,3,9);
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo($result . "\n");


$user = [
    "surname" => "Petrov",
    "name" => "Petr",
    "patronymic" => "Petrovich",
];
foreach ($user as $value){
    echo $value, " ";
}
echo nl2br("\n");


$date = [
    "year" => "2022",
    "month" => "02",
    "day" => "17",
];
echo($date["year"] . "-" . $date["month"] . "-" . $date["day"] . "\n" );


$arr = ['a', 'b', 'c', 'd', 'e'];
echo(count($arr) . "\n");


$arr = ['a', 'b', 'c', 'd', 'e'];
echo(end($arr) . "\n");
echo(prev($arr) . "\n\n");



