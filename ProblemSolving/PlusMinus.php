<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $count = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    foreach ($arr as $el) {
        if ($el == 0) {
            $zero += 1;
        } elseif ($el > 0) {
            $positive += 1;
        } else {
            $negative += 1;
        }
    }

    fwrite(STDOUT, number_format($positive / $count, 6) . "\n");
    fwrite(STDOUT, number_format($negative / $count, 6) . "\n");
    fwrite(STDOUT, number_format($zero / $count, 6) . "\n");
}

fscanf(STDIN, "%d\n", $n);

fscanf(STDIN, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
