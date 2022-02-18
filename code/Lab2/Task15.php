<?php

function printStringReturnNumber() {
    echo nl2br("String \n");
    return 303;
}

$my_num = printStringReturnNumber();
echo($my_num);