<?php

// Complete the aVeryBigSum function below.
function aVeryBigSum($ar) {
    $sum = 0;
    foreach($ar as $el) {
        $sum += $el;
    }

    return $sum;
}

$fptr = fopen("output.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

print($result);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
