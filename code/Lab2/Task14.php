<?php
$a = 10;
$b = 3;
echo nl2br("a % b equels to ". $a % $b . "\n\n");


$a = 303;
$b = 12;
if ($a % $b === 0) {
    echo nl2br("Divided without remainder. Result: " . ($a / $b) . "\n");
}
else {
    echo nl2br("Divided with remainder. Result: " . ($a % $b) . "\n\n");
}


$st = pow(2, 10);
echo nl2br($st . "\n");
echo nl2br(sqrt(245) . "\n");
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum_sqr = 0;
foreach ($arr as $value) {
    $sum_sqr += $value ** 2;
}
echo nl2br(sqrt($sum_sqr) . "\n\n");


$RoundNumber = sqrt(379);
echo nl2br(round($RoundNumber, 0) . "\n");
echo nl2br(round($RoundNumber, 1) . "\n");
echo nl2br(round($RoundNumber, 2) . "\n");
$RoundNumber2 = sqrt(587);
$arr = [
    "floor" => floor($RoundNumber2),
    "ceil" => ceil($RoundNumber2)
];
echo nl2br("Floor is " . $arr['floor'] . ". Ceil is " . $arr['ceil'] . "\n\n");


$MinMaxArr = [4, -2, 5, 19, -130, 0, 1];
echo nl2br("Min is equels to" . min($MinMaxArr) . ". Max is equels to" . max($MinMaxArr) . "\n\n");


echo nl2br(rand(1, 100) . "\n");
$RandArr = [];
for ($i = 0; $i < 10; $i++) { 
    $RandArr[$i] = rand(1, 100);
    echo $RandArr[$i] . ', ';
}
echo nl2br("\n\n");


$a = 13;
$b = 88;
echo nl2br(abs($a - $b) . "\n");
$a = 55;
$b = 55;
echo nl2br(abs($a - $b) . "\n") ;
$a = 33;
$b = 3;
echo nl2br(abs($a - $b) . "\n");
$ModArr = [1, 2, -1, -2, 3, -3];
$ModArr2 = [];
for ($i = 0; $i < 6; $i++) { 
    $ModArr2[$i] = abs($ModArr[$i]);
    echo $ModArr2[$i] . ", ";
}
echo nl2br("\n\n");


$DivNumber = 30;
$index = 0;
$DivArr = [];
for ($i = 1; $i <= $DivNumber; $i++) { 
    if ($DivNumber % $i == 0) {
        $DivArr[$index] = $i;
        $index += 1;
    }
}
for ($i = 0; $i < sizeof($DivArr); $i++) { 
    echo $DivArr[$i] . ', ';
}
echo nl2br("\n");


$SomeArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$SomeSum = 0;
for ($i = 0; $i < 10; $i++) { 
    $SomeSum += $SomeArr[$i];
    $SomeSum++;
    if ($SomeSum > 10) {
        break;
    }
}
echo($SomeSum);





