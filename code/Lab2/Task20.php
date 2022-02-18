<?php

$arr = array(12,2,3,12);
echo(array_sum($arr)/sizeof($arr) . "\n");

echo(array_sum(range(1, 100)) . "\n");

$arr = array_map('sqrt', $arr);
print_r($arr);
echo nl2br("\n");

$keys = range("a", "z");
$nums = range(1, 26);
$arr = array_combine($keys, $nums);
print_r($arr);
echo nl2br("\n");

$str = "1234567890";
$arr = str_split($str, 2);
echo array_sum($arr);