<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    if (!empty($arr)) {
        $sumMax = array_sum($arr) - min($arr);
        $sumMin = array_sum($arr) - max($arr);

        fwrite(STDOUT, $sumMin);
        fwrite(STDOUT, " ");
        fwrite(STDOUT, $sumMax);
    }
}
$stdin = fopen("php://stdin", "r");

fscanf(STDIN, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
