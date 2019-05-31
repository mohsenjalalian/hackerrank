<?php

// Complete the compareTriplets function below.
function compareTriplets($a, $b) {
    $apoint = 0;
    $bpoint = 0;
    if (!empty($a) && !empty($b)) {
        for ($i = 0 ; $i < 3 ; $i++) {
            if ($a[$i] > $b[$i]) {
                $apoint += 1;
            } elseif ($a[$i] < $b[$i]) {
                $bpoint += 1;
            }
        }
    }

    return [$apoint, $bpoint];
}

$fptr = fopen("output.txt", "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

echo $result[0]." ".$result[1];

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);