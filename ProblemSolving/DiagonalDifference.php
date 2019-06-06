<?php

// Complete the diagonalDifference function below.
function diagonalDifference($arr) {
    if (!empty($arr)) {
        $a = 0;
        $b = 0;
        foreach ($arr as $key => $value) {
            $a += $value[$key];
            $b += $value[count($value) - ($key + 1)];
        }

        return $result = abs($a - $b);
    } else {
        return 0;
    }
}

fscanf(STDIN, "%d\n", $n);

$arr = [];

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite(STDOUT, $result . "\n");